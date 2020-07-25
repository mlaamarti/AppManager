<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use DB;

use App\AdProtector;

class AdProtectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Data Statistics
        $data = array(
            "totale_user" => DB::table('adsense_protector')->count(),
            "active" => DB::table('adsense_protector')->where('status',1)->count(),
            "suspend" => DB::table('adsense_protector')->where('status',0)->count(),
            "all" => $this->getAdProtectorInfo()
        );

       return view('dashboard.ad_protector.adProtector',['data'=>$data]);
    }

    public function getAdProtectorInfo(){

        $list  = array();

        $adsmanagers = DB::table('adsense_protector')->get();

        $i = 0;

        foreach ($adsmanagers as $ads){
            // get info application
            $app_info = DB::table('applications')->where('id',$ads->id_application)->select("icon","packageName")->get();
            $list[$i]["icon"] = $app_info[0]->icon;
            $list[$i]["packageName"] = $app_info[0]->packageName;
            $list[$i]["id"]                         = $ads->id;
            $list[$i]["ip"]                         = $ads->ip;
            $list[$i]["status"]                     = $ads->status;
            $list[$i]["created_at"]                 = $ads->created_at;
            $list[$i]["updated_at"]                 = $ads->updated_at;

            $i++;
        }

        return $list;
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

        // get Id Application Using your Package Name
        $data_app = DB::table('applications')->where('packageName',$request->input('id'))->select("id","status")->get();

        if(isset($data_app[0]->id)){

            $data = DB::table('adsense_protector')
                ->where('id_application',$data_app[0]->id)
                ->where('ip',$request->ip())
                ->get();

            if(isset($data[0]->id)){
                $UserAd = AdProtector::find($data[0]->id);
                $UserAd->status = 0;
                $UserAd->updated_at = Carbon::now('Africa/Casablanca');
                $UserAd->save();
            }else{
                // Add User To DB
                $adP = new AdProtector();
                $adP->id = null;
                $adP->id_application = $data_app[0]->id;
                $adP->ip = $request->ip();
                $adP->status = 0;
                $adP->created_at = Carbon::now('Africa/Casablanca');
                $adP->updated_at = Carbon::now('Africa/Casablanca');
                $adP->save();
            }

        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\AdProtector  $adProtector
     * @return \Illuminate\Http\Response
     */
    public function show(AdProtector $adProtector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdProtector  $adProtector
     * @return \Illuminate\Http\Response
     */
    public function edit(AdProtector $adProtector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdProtector  $adProtector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdProtector $adProtector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdProtector  $adProtector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Retrieve the Console
        $user = AdProtector::find($request->input('id'));

        //delete
        $user->delete();

        return Redirect::back()->with('success_delete','<strong>Congratulations </strong> account has been deleted.');
    }
}
