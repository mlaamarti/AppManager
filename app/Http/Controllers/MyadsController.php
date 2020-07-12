<?php

namespace App\Http\Controllers;

use App\adsmanager;
use App\application;
use App\myads;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Storage;

class MyadsController extends Controller
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
            "applications"  => DB::table('applications')->get(),
            "myads"         => DB::table('myads')
                                    ->join('applications', 'applications.id', '=', 'myads.id_application')
                                    ->select('applications.packageName','applications.icon','myads.id','myads.type','myads.status','myads.created_at','myads.updated_at')
                                    ->get()
        );




        return view('dashboard.myads.myads',['data' => $data,]);
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
        $data = array();

        $id_app = DB::table('applications')->where('packageName',$request->input('application'))->select("id")->get();

        if (empty($data)) {

            $myads = new myads();
            $myads->id = null;
            $myads->type = $request->input('type');
            $myads->id_application = $id_app[0]->id;
            $myads->list_apps = $request->input('list_app');

            if (!empty($request->input('list_app'))){
               $ap = DB::table('applications')->where('packageName',$request->input('list_app'))->get();
                $myads->name = $ap[0]->title;
                $myads->icon = $ap[0]->icon;
            }

            $myads->about = $request->input('about');
            $myads->status = 1;
            $myads->save();

            return redirect()->route('myads')->with('success', '<strong>Congratulations </strong> you ads have been accepted.');
        }else
            return Redirect::back()->withInput(Input::all())
                ->with('errors',$data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\myads  $myads
     * @return \Illuminate\Http\Response
     */
    public function show(myads $myads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\myads  $myads
     * @return \Illuminate\Http\Response
     */
    public function edit(myads $myads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\myads  $myads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = array();

        if (empty($data)) {

            $myads = myads::find($request->input('id'));
            $myads->type = $request->input('type');
            $myads->id_application = $request->input('application');
            $myads->list_apps = $request->input('list_app');

            if (!empty($request->input('list_app'))){
                $ap = DB::table('applications')->where('packageName',$request->input('list_app'))->get();
                $myads->name = $ap[0]->title;
                $myads->icon = $ap[0]->icon;
            }

            $myads->about = $request->input('about');
            $myads->status = $request->input('status');
            $myads->save();

            return redirect()->route('myads')->with('success_edit', '<strong>Congratulations </strong> you ads have been accepted.');
        }else
            return Redirect::back()->withInput(Input::all())
                ->with('errors_edit',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\myads  $myads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Retrieve the Console
        $app = myads::find($request->input('id'));

        //delete
        $app->delete();

        return redirect()->route('myads')->with('success_delete', '<strong>Congratulations </strong> you ads have been accepted.');
    }

    public function getMyAdsById(Request $request){

        $data = array();

        $myads = DB::table('myads')->where('id',$request->input('id'))->get();

        $packageName = DB::table('applications')->where('id',$myads[0]->id_application)->select("packageName")->get();


        array_push($data,$myads);
        array_push($data,$packageName);

        echo json_encode($data,true);
    }
}
