<?php

namespace App\Http\Controllers;

use App\account;
use App\AdProtector;
use App\adsmanager;
use App\application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Type;
use Redirect;
use DB;
use Carbon\Carbon;

use Goutte;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $email_admob = [];
        $email_fb = [];

        // Get Ads Info
        $application = DB::table('applications')
            ->join('accounts', 'accounts.id', '=', 'applications.id_account')
            ->where('applications.id',$request->input('id'))
            ->select('applications.id', 'applications.packageName', 'applications.title', 'applications.icon', 'applications.developerName', 'applications.type' , 'applications.category', 'applications.installs', 'applications.review', 'applications.id_account', 'applications.currentVersion', 'applications.description', 'applications.status', 'applications.ad_status', 'applications.created_at', 'applications.updated_at','accounts.id', 'accounts.email')
            ->get();



        $adsmanager  = DB::table('adsmanagers')->where('id_application',$request->input('id'))->get();

        if (!empty($adsmanager)){
            $email_admob = DB::table('accounts')->where('id',isset($adsmanager[0]->id_admob_acc))->select('email')->get();
            $email_fb    = DB::table('accounts')->where('id',isset($adsmanager[0]->id_facebook_acc))->select('email')->get();
        }


        echo  json_encode(array_merge(json_decode($application, true),json_decode($adsmanager, true),json_decode($email_admob, true),json_decode($email_fb, true)));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $packagename = DB::table('applications')->where('packageName',$request->input('packagename'))->count();

        $data = array();

        if($packagename > 0)
            array_push($data,'- <b>PackageName </b> already exists.');

        try{

            $app = new application();
            $app->id = null;
            $app->packageName = $request->input('packagename');
            $app->title = "";
            $app->icon = "";
            $app->developerName = "";
            $app->category = "";
            $app->installs = "";
            $app->review = "";
            $app->currentVersion = "";
            $app->description = "";
            $app->type = $request->input('type');
            $app->id_account = $request->input('console');
            $app->status = 0;
            $app->ad_status = 0;
            $app->is_suspend = 0;
            $app->save();

            //return redirect()->route('dashboard.home')->with('success','<strong>Congratulations </strong> you have been accepted.');

            return Redirect::back()->with('success','<strong>Congratulations </strong> you have been accepted.');


        }
        catch (\Exception $e) {
            // do task when error
            return Redirect::back()->withInput(Input::all())
                ->with('errors',$data);

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $client = new Goutte\Client();

        $apps = DB::table('applications')->get();


        foreach ($apps as $app){

            $crawler = $client->request('GET', "https://play.google.com/store/apps/details?id=". str_replace(' ', '', $app->packageName));

            $application = application::find($app->id);

            if($client->getResponse()->getStatus() == 200 && $application->is_suspend == 0) {


                $application->title          = $crawler->filter('.AHFaub span')->text();
                $application->icon           = $crawler->filter('.xSyT2c img')->attr('src');
                $application->developerName  = '<a target="_blank" href="https://play.google.com"'.$crawler->filter('.qQKdcc span a')->attr('href').'>'. $crawler->filter('.qQKdcc span a')->text().'</a>';
                $application->category       = $crawler->filter('.qQKdcc span')->last()->text();
                $application->description    = $crawler->filter('.DWPxHb span div')->html();
                $application->installs       = $crawler->filter('.IxB2fe .hAyfc .htlgb .IQ1z0d')->eq(2)->text();
                $application->currentVersion = $crawler->filter('.IxB2fe .hAyfc .htlgb .IQ1z0d')->eq(3)->text();
                $application->review         = $crawler->filter('.D0ZKYe .AYi5wd span')->text() . ' | ' . $crawler->filter('.K9wGie .BHMmbe')->text();
                $application->status = 1;
                $application->is_suspend = 0;

            }else{

                $adsId     = DB::table('adsmanagers')->where('id_application',$app->id)->select("id")->get();

                if(count($adsId) == 1){
                    $ads = adsmanager::find($adsId[0]->id);
                    $ads->status = 0;
                    $ads->save();
                }

                $application->status = 0;
                $application->ad_status = 0;

            }

            $application->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Retrieve the Console
        $app = application::find($request->input('id'));

        //delete
        $app->delete();

        return Redirect::back()->with('success_delete','<strong>Congratulations </strong> account has been deleted.');
    }

    public function is_suspend(Request $request){
        $adsId = DB::table('adsmanagers')->where('id_application',$request->input('id'))->select("id")->get();

        try {

            $app = application::find($request->input('id'));
            $ads = adsmanager::find($adsId[0]->id);

            if ($request->input('status') == '1') {
                $app->is_suspend = 0;
                $app->status = 1;
                $app->ad_status = 0;
            }else {
                $app->is_suspend = 1;
                $app->status = 0;
                $app->ad_status = 0;
                $ads->status = 0;
            }

            $app->save();
            $ads->save();

            return redirect()->route('home')
                ->withInput(Input::all())->with('success_is','<strong>Congratulations </strong> your change has been confirmed.');

        } catch (\Exception $e) {
            // do task when error
            return Redirect::back()->withInput(Input::all())
                ->with('error_is','<strong>Sorry </strong> you can\'t suspend your application at this time.');


        }

    }

    public function getAllInfoApplication(Request $request){

        // get id and status application
        $data_app = DB::table('applications')->where('packageName',$request->input('id'))->select("id","status")->get();


        // get Ip
        $ip = $request->ip();


        // if application exist
        if(isset($data_app[0]->status)){

            $getAdsApp = DB::table('adsmanagers')->where('id_application',$data_app[0]->id)->get();

            if ($data_app[0]->status == false){
                $getMyAdsApp = DB::table('myads')->where('id_application',$data_app[0]->id)->get();

                $data = array();

                if (isset($getMyAdsApp[0]->id)) {
                    for ($i = 0; $i < count($getMyAdsApp); $i++)
                        array_push($data, $getMyAdsApp[$i]);

                    return json_encode($data, true);
                }
            }

            // if isset ads
            if (isset($getAdsApp[0]->id)){
                // Verfiy Ads
                if($getAdsApp[0]->type == "All" OR $getAdsApp[0]->type == "Admob"){
                    // Get All List Users
                    $adProtector = DB::table('adsense_protector')
                        ->where('id_application',$data_app[0]->id)
                        ->where('ip',$ip)
                        ->get();

                    // if User Exist
                    if (isset($adProtector[0]->id)){

                        // if User Is Ban
                        if($adProtector[0]->status == 0){
                            // check ban Time
                            $date = Carbon::parse($adProtector[0]->updated_at);

                            if($date->diffInDays( Carbon::now('Africa/Casablanca')) == 0)
                                $getAdsApp[0]->type = "Facebook";
                            else{
                                // Update Status Users
                                $adPrr = AdProtector::find($adProtector[0]->id);
                                $adPrr->status = true;
                                $adPrr->updated_at = Carbon::now('Africa/Casablanca');
                                $adPrr->save();
                            }

                        }

                        return json_encode($getAdsApp[0],true);
                    }else{
                        // Add User To DB
                        $adP = new AdProtector();
                        $adP->id = null;
                        $adP->id_application = $data_app[0]->id;
                        $adP->ip = $ip;
                        $adP->status = true;
                        $adP->created_at = Carbon::now('Africa/Casablanca');
                        $adP->updated_at = Carbon::now('Africa/Casablanca');
                        $adP->save();
                    }
                }else{
                    if($getAdsApp[0]->type == "Facebook"){
                        return json_encode($getAdsApp[0],true);
                    }else{
                        $getMyAdsApp = DB::table('myads')->where('id_application',$data_app[0]->id)->get();

                        $data = array();

                        if (isset($getMyAdsApp[0]->id)){
                            for ($i = 0;$i<count($getMyAdsApp);$i++)
                                array_push($data,$getMyAdsApp[$i]);

                            return json_encode($data,true);
                        }
                    }
                }
            }
        }

        return [];
    }

    public function getMyAds($packageName){
        // get id and status application
        $data_app = DB::table('applications')->where('packageName',$packageName)->select("id","status")->get();

        if(isset($data_app[0]->status)){
            // get My Ads
            $getMyAds = DB::table('myads')->where('id_application',$data_app[0]->id)->get();

            return json_encode($getMyAds, true);
        }else
            return null;
    }
}
