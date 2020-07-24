<?php

namespace App\Http\Controllers;

use App\adsmanager;
use App\application;
use Illuminate\Http\Request;
use App\account;
use Redirect;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Storage;



class AdsmanagerController extends Controller
{
    protected $accountController;

    public function __construct( AccountController $accountController)
    {
        $this->accountController = $accountController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // Data Statistics
        $data = array(
            "totale_ads"  => DB::table('adsmanagers')->count(),
            "active_ads"  => DB::table('adsmanagers')->where('status','1')->count(),
            "suspend_ads" => DB::table('adsmanagers')->where('status','0')->count(),
            "all_ads_type" => DB::table('adsmanagers')->where('type','all')->count(),
            "fb_ads" => DB::table('adsmanagers')->where('type','facebook')->count(),
            "admob_ads" => DB::table('adsmanagers')->where('type','admob')->count(),
            "acc_active" => $this->accountController->getAccountActive(),
            "applications"  => DB::table('applications')->get(),
            "all_ads" => DB::table('adsmanagers')->orderBy('id', 'DESC')->get()
        );

        return view('dashboard.ads_manager.ads-manager',['data'=>$data,"list"=> $this->getAdsInfo(""),true]);
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
        $id_app             = DB::table('applications')->where('packageName',$request->input('application'))->select("id")->get();
        $id_email_admob     = DB::table('accounts')->where('email',$request->input('email_admob'))->select("id")->get();
        $id_email_facebook  = DB::table('accounts')->where('email',$request->input('acc_facebook'))->select("id")->get();


        $packagename = DB::table('adsmanagers')->where('id_application',$id_app[0]->id)->count();

        $data = array();

        if($packagename > 0)
            array_push($data,'- <b>Application </b> already exists.');

        try{
            $ads = new adsmanager();
            $ads->id                        = null;
            $ads->id_application            = $id_app[0]->id;
            $ads->id_admob                  = $request->input('id_admob');
            $ads->ads_text_admob            = $request->input('ads_text');
            $ads->banner_admob              = $request->input('banner_admob');
            $ads->interstitial_admob        = $request->input('interstitial_admob');
            $ads->native_admob              = $request->input('native_admob');
            $ads->reward_admob              = $request->input('reward_admob');
            $ads->banner_facebook           = $request->input('banner_facebook');
            $ads->interstitial_facebook     = $request->input('interstitial_facebook');
            $ads->native_facebook           = $request->input('native_facebook');
            $ads->native_banner_facebook    = $request->input('native_banner_facebook');
            $ads->medium_rectangle_facebook = $request->input('medium_rectangle_facebook');
            $ads->id_admob_acc              = $id_email_admob[0]->id;
            $ads->id_facebook_acc           = $id_email_facebook[0]->id;
            $ads->fillrate_admob            = $request->input('fullrate_admob');
            $ads->fillrate_facebook         = $request->input('fullrate_facebook');
            $ads->click_admob               = $request->input('NumberClick');
            $ads->type                      = "All";
            $ads->status                    = 1;
            $ads->save();

            Storage::disk('local')->put('public/apps/'.str_replace(".","_",$request->input('application')).'/app-ads.txt', $request->input('ads_text'));

            return redirect()->route('ads-manager')->with('success','<strong>Congratulations </strong> you have been accepted.');

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
     * @param  \App\adsmanager  $adsmanager
     * @return \Illuminate\Http\Response
     */
    public function show(adsmanager $adsmanager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adsmanager  $adsmanager
     * @return \Illuminate\Http\Response
     */
    public function edit(adsmanager $adsmanager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adsmanager  $adsmanager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id_email_admob     = DB::table('accounts')->where('email',$request->input('email_admob'))->select("id")->get();
        $id_email_facebook  = DB::table('accounts')->where('email',$request->input('acc_facebook'))->select("id")->get();
        $id_app             = DB::table('applications')->where('packageName',$request->input('application'))->select("id")->get();

        $data = array();


        try{
            $ads = adsmanager::find($request->input('id'));
            $ads->id_admob                  = $request->input('id_admob');
            $ads->ads_text_admob            = $request->input('ads_text');
            $ads->banner_admob              = $request->input('banner_admob');
            $ads->interstitial_admob        = $request->input('interstitial_admob');
            $ads->native_admob              = $request->input('native_admob');
            $ads->reward_admob              = $request->input('reward_admob');
            $ads->banner_facebook           = $request->input('banner_facebook');
            $ads->interstitial_facebook     = $request->input('interstitial_facebook');
            $ads->native_facebook           = $request->input('native_facebook');
            $ads->native_banner_facebook    = $request->input('native_banner_facebook');
            $ads->medium_rectangle_facebook = $request->input('medium_rectangle_facebook');
            $ads->id_admob_acc              = $id_email_admob[0]->id;
            $ads->id_facebook_acc           = $id_email_facebook[0]->id;
            $ads->fillrate_admob            = $request->input('fullrate_admob');
            $ads->fillrate_facebook         = $request->input('fullrate_facebook');
            $ads->click_admob               = $request->input('NumberClick');
            $ads->type                      = $request->input('type');
            $ads->status                    = $request->input('status');
            $ads->save();


            $app = application::find($id_app[0]->id);
            $app->ad_status = $request->input('status');
            $app->save();


            Storage::disk('local')->put('public/apps/'.str_replace(".","_",$request->input('application')).'/app-ads.txt', $request->input('ads_text'));


            return redirect()->route('ads-manager')
                ->withInput(Input::all())->with('success_edit','<strong>Congratulations </strong> your update hase been accepted.');

        }
        catch (\Exception $e) {
            // do task when error
            return Redirect::back()->withInput(Input::all())
                ->with('errors_edit',$data);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adsmanager  $adsmanager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Retrieve the Console
        $ads = adsmanager::find($request->input('id'));

        $packageName = DB::table('applications')->where('id',$ads->id_application)->select("packageName")->get();
        Storage::delete('public/apps/'.str_replace(".","_",$packageName[0]->packageName).'/app-ads.txt');

        //delete
        $ads->delete();

        return Redirect::back()->with('success_delete','<strong>Congratulations </strong> Ads has been deleted.');
    }

    public function getAdsInfo($id){

        $list  = array();

        if (isset($id))
            $adsmanagers = DB::table('adsmanagers')->get();
        else
            $adsmanagers = DB::table('adsmanagers')->where('id',$id)->get();

        $i = 0;
        foreach ($adsmanagers as $ads){
            // get info application
            $app_info = DB::table('applications')->where('id',$ads->id_application)->select("icon","packageName")->get();
            $list[$i]["icon"] = $app_info[0]->icon;
            $list[$i]["packageName"] = $app_info[0]->packageName;

            // get email fb
            $email_fb = DB::table('accounts')->where('id',$ads->id_facebook_acc)->select("email")->get();
            $list[$i]["email_fb"] = $email_fb[0]->email;

            // get email admob
            $email_admob = DB::table('accounts')->where('id',$ads->id_admob_acc)->select("email")->get();
            $list[$i]["email_admob"] = $email_admob[0]->email;

            $list[$i]["id"]                         = $ads->id;
            $list[$i]["id_application"]             = $ads->id_application;
            $list[$i]["id_admob"]                   = $ads->id_admob;
            $list[$i]["ads_text_admob"]             = $ads->ads_text_admob;
            $list[$i]["banner_admob"]               = $ads->banner_admob;
            $list[$i]["interstitial_admob"]         = $ads->interstitial_admob;
            $list[$i]["native_admob"]               = $ads->native_admob;
            $list[$i]["reward_admob"]               = $ads->reward_admob;
            $list[$i]["banner_facebook"]            = $ads->banner_facebook;
            $list[$i]["interstitial_facebook"]      = $ads->interstitial_facebook;
            $list[$i]["native_facebook"]            = $ads->native_facebook;
            $list[$i]["native_banner_facebook"]     = $ads->native_banner_facebook;
            $list[$i]["medium_rectangle_facebook"]  = $ads->medium_rectangle_facebook;
            $list[$i]["id_admob_acc"]               = $ads->id_admob_acc;
            $list[$i]["id_facebook_acc"]            = $ads->id_facebook_acc;
            $list[$i]["fillrate_admob"]             = $ads->fillrate_admob;
            $list[$i]["fillrate_facebook"]          = $ads->fillrate_facebook;
            $list[$i]["numberClick"]                = $ads->click_admob;
            $list[$i]["type"]                       = $ads->type;
            $list[$i]["status"]                     = $ads->status;
            $list[$i]["created_at"]                 = $ads->created_at;
            $list[$i]["updated_at"]                 = $ads->updated_at;

            $i++;
        }

        return $list;
    }

    public  function getAdsById(Request $request){

        $list  = array();
        $i =0;

        if (isset($id))
            $adsmanagers = DB::table('adsmanagers')->get();
        else
            $adsmanagers = DB::table('adsmanagers')->where('id',$request->input('id'))->get();

        foreach ($adsmanagers as $ads){

            // get info application
            $app_info = DB::table('applications')->where('id',$ads->id_application)->select("icon","packageName")->get();
            $list[$i]["icon"] = $app_info[0]->icon;
            $list[$i]["packageName"] = $app_info[0]->packageName;

            // get email fb
            $email_fb = DB::table('accounts')->where('id',$ads->id_facebook_acc)->select("email")->get();
            $list[$i]["email_fb"] = $email_fb[0]->email;

            // get email admob
            $email_admob = DB::table('accounts')->where('id',$ads->id_admob_acc)->select("email")->get();
            $list[$i]["email_admob"] = $email_admob[0]->email;

            $list[$i]["id"]                         = $ads->id;
            $list[$i]["id_application"]             = $ads->id_application;
            $list[$i]["id_admob"]                   = $ads->id_admob;
            $list[$i]["ads_text_admob"]             = $ads->ads_text_admob;
            $list[$i]["banner_admob"]               = $ads->banner_admob;
            $list[$i]["interstitial_admob"]         = $ads->interstitial_admob;
            $list[$i]["native_admob"]               = $ads->native_admob;
            $list[$i]["reward_admob"]               = $ads->reward_admob;
            $list[$i]["banner_facebook"]            = $ads->banner_facebook;
            $list[$i]["interstitial_facebook"]      = $ads->interstitial_facebook;
            $list[$i]["native_facebook"]            = $ads->native_facebook;
            $list[$i]["native_banner_facebook"]     = $ads->native_banner_facebook;
            $list[$i]["medium_rectangle_facebook"]  = $ads->medium_rectangle_facebook;
            $list[$i]["id_admob_acc"]               = $ads->id_admob_acc;
            $list[$i]["id_facebook_acc"]            = $ads->id_facebook_acc;
            $list[$i]["fillrate_admob"]             = $ads->fillrate_admob;
            $list[$i]["fillrate_facebook"]          = $ads->fillrate_facebook;
            $list[$i]["numberClick"]                = $ads->click_admob;
            $list[$i]["type"]                       = $ads->type;
            $list[$i]["status"]                     = $ads->status;
            $list[$i]["created_at"]                 = $ads->created_at;
            $list[$i]["updated_at"]                 = $ads->updated_at;

        }

        echo json_encode($list,true);
    }
}
