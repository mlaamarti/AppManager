<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use DB;

use Goutte;

class HomeController extends Controller
{

    protected $accountController;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AccountController $accountController)
    {
        $this->middleware('auth');
        $this->accountController = $accountController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // Data Statistics
        $data = array(
            "totale_acc" => DB::table('accounts')->count(),
            "console" => DB::table('accounts')->where('type','Console Developer')->count(),
            "admob" => DB::table('accounts')->where('type','Admob')->count(),
            "facebook" => DB::table('accounts')->where('type','Facebook')->count(),
            "total_app" => DB::table('applications')->count(),
            "active" => DB::table('applications')->where('status',1)->count(),
            "suspend" => DB::table('applications')->where('status',0)->count(),
            "apps_with_ads" => DB::table('applications')->where('ad_status',1)->count(),
            "apps_without_ads" => DB::table('applications')->where('ad_status',0)->count(),
            "acc_active" => $this->accountController->getAccountActive(),
            "application_all" => DB::table('applications')->orderBy('id', 'DESC')->get()
        );

        return view('dashboard.home',['data'=>$data]);
    }
}
