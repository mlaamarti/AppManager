@include('layouts.header',['title'=>'Manage Ads'])


<!-- main -->
<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-2">
                <div class="widget2 bg-gradient3">
                    <div class="title">Total Ads</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['totale_ads']}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="widget2 bg-gradient8">
                    <div class="title">Active</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['active_ads']}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="widget2 bg-gradient1">
                    <div class="title">Suspend</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ban"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['suspend_ads']}}</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="widget2 bg-gradient12">
                    <div class="title">All</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['all_ads_type']}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="widget2 bg-gradient9">
                    <div class="title">Facebook</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['fb_ads']}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="widget2 bg-gradient10">
                    <div class="title">Admob</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['admob_ads']}}</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="top-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ads Manager</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="col-md-6">
                <div class="ink" style="float:right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Create_Property">Create Property</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--- Start Success --->
                @if (session('success_delete'))
                    <div class="alert alert-success alert-dismissible fade show alert-lm" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        {!! session('success_delete') !!}
                    </div>
                @endif

            <!--- Start Error --->
                @if (session('errors_edit'))
                    <div class="alert alert-danger alert-dismissible fade show alert-lm" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        @foreach (session('errors_edit') as $errors)
                            {!! $errors !!} <br>
                        @endforeach

                    </div>
                @endif

            <!--- Start Success --->
                @if (session('success_edit'))
                    <div class="alert alert-success alert-dismissible fade show alert-lm" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        {!! session('success_edit') !!}
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <h5>ADs Manager Details</h5>
                        <div class="table-responsive-lg">
                            <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Status Ads</th>
                                    <th>Icon</th>
                                    <th>PackageName</th>
                                    <th>Email Admob</th>
                                    <th>Email FB</th>
                                    <th>Type</th>
                                    <th>Fill Rate (Admob)</th>
                                    <th>Fill Rate (FB)</th>
                                    <th>Date Creation</th>
                                    <th><i class="fas fa-cog"></i></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list as $ads)
                                <tr>
                                    <td>
                                        @if($ads['status'] == 0)<span class="badge badge-danger">Suspend</span>@endif
                                        @if($ads['status'] == 1) <span class="badge badge-success">Active</span>@endif
                                    </td>

                                    <td>
                                        <a href="play.google.com/store/apps/details?id={{$ads['packageName']}}">
                                            @if(empty($ads['icon']))
                                                <img src="{{asset('images/default-app.png')}}" alt="user" height="50" style="height:50px !important;width: 50px !important;" class="rounded-circle">
                                            @endif

                                            @if(!empty($ads['icon']))
                                                <img src="{{ $ads['icon'] }}" alt="user" height="50" style="height:50px !important;width: 50px !important;" class="rounded-circle">
                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        <a style="color: #0b96e5" href="play.google.com/store/apps/details?id={{$ads['packageName']}}">
                                            {{ \Illuminate\Support\Str::limit($ads['packageName'], 20, $end='...') }}
                                        </a>
                                    </td>
                                    <td>{{$ads['email_admob']}}</td>
                                    <td>{{$ads['email_fb']}}</td>
                                    <td>{{$ads['type']}}</td>
                                    <td>{{$ads['fillrate_admob']}} %</td>
                                    <td>{{$ads['fillrate_facebook']}} %</td>
                                    <td>{{date('d-m-Y', strtotime($ads['created_at']))}}</td>
                                    <td data-id="{{$ads['id']}}">
                                        <button class="flat-btn flat-btn-info btn bg-blue Update_Property" data-toggle="modal" data-target="#Update_Property" >
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="flat-btn flat-btn-warning btn bg-danger delete_ads" data-color="yellow" data-toggle="modal" data-target="#delete_ads">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Status Ads</th>
                                    <th>Icon</th>
                                    <th>PackageName</th>
                                    <th>Email Admob</th>
                                    <th>Email FB</th>
                                    <th>Type</th>
                                    <th>Fill Rate (Admob)</th>
                                    <th>Fill Rate (FB)</th>
                                    <th>Date Creation</th>
                                    <th><i class="fas fa-cog"></i></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</main>
<!-- end main -->
</div>
</div>
@include('layouts.footer')


<!-- Create_Property -->
<div class="modal fade" id="Create_Property" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create Property</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height: 500px;overflow: scroll;">
                <form action="{{route('ads-manager.store')}}" method="post">
                    @csrf

                    <!--- Start Error --->
                        @if (session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show alert-lm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                </button>
                                @foreach (session('errors') as $errors)
                                    {!! $errors !!} <br>
                                @endforeach

                            </div>
                        @endif

                    <!--- Start Success --->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show alert-lm" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                </button>
                                {!! session('success') !!}
                            </div>
                        @endif

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Application</label>
                        <div class="col-sm-9">
                            <select class="form-control selectpicker" id="application" name="application" data-live-search="true">
                                @foreach($data['applications'] as $app)
                                    @if(!$app->is_suspend)
                                        <option data-tokens="{{$app->packageName}}">{{$app->packageName}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-danger btn-rect text-uppercase" type="button" disabled>
                            Admob
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="email_admob" class="col-sm-3 col-form-label">Admob Account</label>
                        <div class="col-sm-9">
                            <select class="form-control selectpicker" id="email_admob" name="email_admob">
                                @foreach($data['acc_active'] as $acc)
                                    @if($acc->status == true && $acc->type == "Admob")
                                        <option data-tokens="{{$acc->email}}">{{$acc->email}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_admob">ADMOB ID</label>
                            <input type="text" class="form-control" id="id_admob" name="id_admob" placeholder="id admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ads_text">ADS TEXT</label>
                            <input type="text" class="form-control" id="ads_textt" name="ads_text" placeholder="ads text">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_admob">ADMOB BANNER</label>
                            <input type="text" class="form-control" id="banner_admob" name="banner_admob"  placeholder="banner admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_admob">ADMOB INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_admob"  name="interstitial_admob"  placeholder="interstitial admob">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_admob">ADMOB NATIVE</label>
                            <input type="text" class="form-control" id="native_admob" name="native_admob"  placeholder="native admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_admob">ADMOB REWARD</label>
                            <input type="text" class="form-control" id="reward_admob" name="reward_admob"  placeholder="reward admob">
                        </div>
                    </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="numberClick">Number Click</label>
                                <input type="text" class="form-control" id="numberClick" name="NumberClick"  placeholder=number click">
                            </div>
                        </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-primary btn-rect text-uppercase" type="button" disabled>
                            Audiance Network
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Facebook Account</label>
                        <div class="col-sm-9">
                            <select class="form-control selectpicker" id="acc_facebook" name="acc_facebook">
                                @foreach($data['acc_active'] as $acc)
                                    @if($acc->status == true && $acc->type == "Facebook")
                                        <option data-tokens="{{$acc->email}}">{{$acc->email}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_facebook">FACEBOOK BANNER</label>
                            <input type="text" class="form-control" id="banner_facebook"  name="banner_facebook" placeholder="banner facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_facebook">FACEBOOK INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_facebook" name="interstitial_facebook" placeholder="interstitial facebook">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_facebook">FACEBOOK NATIVE</label>
                            <input type="text" class="form-control" id="native_facebook"  name="native_facebook" placeholder="native facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_facebook">FACEBOOK NATIVE BANNER</label>
                            <input type="text" class="form-control" id="native_banner_facebook" name="native_banner_facebook" placeholder="native banner facebook" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="medium_rectangle_facebook">FACEBOOK MEDIUM RECTANGLE</label>
                            <input type="text" class="form-control" id="medium_rectangle_facebook" name="medium_rectangle_facebook" placeholder="Medium Rectangle facebook" readonly>
                        </div>
                    </div>


                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-dark btn-rect text-uppercase" type="button" disabled>
                            Setting  Ads
                        </button>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_facebook">Full Rate FACEBOOK</label>
                            <input type="number" class="form-control" id="fullrate_admob" name="fullrate_admob" placeholder="full rate facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_facebook">Full Rate Admob</label>
                            <input type="number" class="form-control" id="fullrate_facebook" name="fullrate_facebook" placeholder="full rate admob">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create Property</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Edit Property -->
<div class="modal fade" id="Update_Property" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Property</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height: 500px;overflow: scroll;">
                <form action="{{route('ads-manager.update')}}" method="post">
                @csrf



                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Application</label>
                        <div class="col-sm-9">
                            <input type="hidden" id="id_ads" name="id">
                            <input type="hidden" id="package_app" name="application">
                            <select class="form-control selectpicker" id="application_edit" data-live-search="true" disabled>

                            @foreach($data['applications'] as $app)
                                    @if(!$app->is_suspend)
                                        <option data-tokens="{{$app->packageName}}">{{$app->packageName}}</option>
                                    @endif
                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="type">Type</label>
                            <select class="form-control selectpicker" id="type_edit" name="type" data-live-search="true">
                                <option data-tokens="All">All</option>
                                <option data-tokens="Admob">Admob</option>
                                <option data-tokens="Facebook">Facebook</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ads_text">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="radio-20" value="1" checked="checked">
                                <label class="form-check-label" for="gridRadios1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="radio-21" value="0" checked="">
                                <label class="form-check-label" for="gridRadios2">
                                    Suspend
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-danger btn-rect text-uppercase" type="button" disabled>
                            Admob
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="email_admob" class="col-sm-3 col-form-label">Admob Account</label>
                        <div class="col-sm-9">
                            <select class="form-control selectpicker" id="email_admob_edit" name="email_admob">
                                @foreach($data['acc_active'] as $acc)
                                    @if($acc->status == true && $acc->type == "Admob")
                                        <option data-tokens="{{$acc->email}}">{{$acc->email}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_admob">ADMOB ID</label>
                            <input type="text" class="form-control" id="id_admob_edit" name="id_admob" placeholder="id admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ads_text">ADS TEXT</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ads text" aria-label="ads text" name="ads_text" id="ads_text_edit">
                                <input type="text" id="url_copy"  class="form-control" readonly>
                                <div class="input-group-append">
                                    <button  class="btn"  data-clipboard-target="#url_copy" type="button" ><i class="fas fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_admob">ADMOB BANNER</label>
                            <input type="text" class="form-control" id="banner_admob_edit" name="banner_admob"  placeholder="banner admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_admob">ADMOB INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_admob_edit"  name="interstitial_admob"  placeholder="interstitial admob">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_admob">ADMOB NATIVE</label>
                            <input type="text" class="form-control" id="native_admob_edit" name="native_admob"  placeholder="native admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_admob">ADMOB REWARD</label>
                            <input type="text" class="form-control" id="reward_admob_edit" name="reward_admob"  placeholder="reward admob">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="numberClick_U">Number Click</label>
                            <input type="text" class="form-control" id="numberClick_U" name="NumberClick"  placeholder=number click">
                        </div>
                    </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-primary btn-rect text-uppercase" type="button" disabled>
                            Audiance Network
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Facebook Account</label>
                        <div class="col-sm-9">
                            <select class="form-control selectpicker" id="acc_facebook_edit" name="acc_facebook">
                                @foreach($data['acc_active'] as $acc)
                                    @if($acc->status == true && $acc->type == "Facebook")
                                        <option data-tokens="{{$acc->email}}">{{$acc->email}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_facebook">FACEBOOK BANNER</label>
                            <input type="text" class="form-control" id="banner_facebook_edit"  name="banner_facebook" placeholder="banner facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_facebook">FACEBOOK INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_facebook_edit" name="interstitial_facebook" placeholder="interstitial facebook">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_facebook">FACEBOOK NATIVE</label>
                            <input type="text" class="form-control" id="native_facebook_edit"  name="native_facebook" placeholder="native facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_facebook">FACEBOOK NATIVE BANNER</label>
                            <input type="text" class="form-control" id="native_banner_facebook_edit" name="native_banner_facebook" placeholder="native banner facebook" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="medium_rectangle_facebook">FACEBOOK MEDIUM RECTANGLE</label>
                            <input type="text" class="form-control" id="medium_rectangle_facebook_edit" name="medium_rectangle_facebook" placeholder="Medium Rectangle facebook" readonly>
                        </div>
                    </div>


                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-dark btn-rect text-uppercase" type="button" disabled>
                            Setting  Ads
                        </button>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_facebook">Full Rate FACEBOOK</label>
                            <input type="number" class="form-control" id="fullrate_admob_edit" name="fullrate_admob" placeholder="full rate facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_facebook">Full Rate Admob</label>
                            <input type="number" class="form-control" id="fullrate_facebook_edit" name="fullrate_facebook" placeholder="full rate admob">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-theme-success">Update Property</button>
            </div>
            </form>
        </div>
    </div>
</div>



<!--  Delete Account -->
<div class="modal fade" id="delete_ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Confirm Delection</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete ?</p>
            </div>
            <div class="modal-footer">
                <form action="{{route('ads-manager.destroy')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id_delete" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


@if (session('success') || session('errors'))
    <script>
        $('#Create_Property').modal('show');
    </script>
@endif
