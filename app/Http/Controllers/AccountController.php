<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use DB;


class AccountController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = DB::table('accounts')->orderBy('id', 'DESC')->get();


        return view('dashboard.accounts.accounts',['accs'=>$accounts]);
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
        $email = DB::table('accounts')->where('email',$request->input('email'))->count();
        $ip    = DB::table('accounts')->where('ip',$request->input('ip'))->count();


        $data = array();

        if($email > 0)
            array_push($data,'- <b>Email </b> already exists.');

        if($ip > 0)
            array_push($data,'- <b>Ip </b> already exists.');



        try{
            $account = new account();
            $account->id = null;
            $account->email = $request->input('email');
            $account->ip = $request->input('ip');
            $account->type = $request->input('type');
            $account->country = $request->input('country');
            $account->status = true;
            $account->save();

            return redirect()->route('accounts')->with('success','<strong>Congratulations </strong> you have been accepted.');



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
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, account $account)
    {
        $data = array();

        $acc =  DB::table('accounts')->where('id',$request->input('id'))->get();


        if ($acc[0]->email != $request->input('email')){
            $email = DB::table('accounts')->where('email',$request->input('email'))->count();
            if($email > 0)
                array_push($data,'- <b>Email</b> already exists.');
        }


        if ($acc[0]->ip != $request->input('ip')){
            $ip = DB::table('accounts')->where('ip',$request->input('ip'))->count();
            if($ip > 0)
                array_push($data,'- <b>Ip </b> already exists.');
        }


        try {

            $account = account::find($request->input('id'));
            $account->email = $request->input('email');
            $account->ip = $request->input('ip');
            $account->type = $request->input('type');
            $account->country = $request->input('country');
            $account->status = $request->input('status');
            $account->save();

            return redirect()->route('accounts')
                ->withInput(Input::all())->with('success_edit','<strong>Congratulations </strong> your update hase been accepted.');

        } catch (\Exception $e) {
            // do task when error
            return Redirect::back()->withInput(Input::all())
                ->with('errors_edit',$data);


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //Retrieve the Console
        $account = account::find($request->input('id'));

        //delete
        $account->delete();

        return redirect()->route('accounts')->with('success_delete','<strong>Congratulations </strong> account has been deleted.');
    }


    /**
     * Get the Account By Id
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function getAccountById(Request $request)
    {
        $account = DB::table('accounts')->where('id',$request->id)->orderBy('id', 'DESC')->get();

        echo json_encode($account);
    }

    /**
     * Get the Account Active
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function getAccountActive()
    {
        $account = DB::table('accounts')->orderBy('id', 'DESC')->get();

        return $account;
    }

}
