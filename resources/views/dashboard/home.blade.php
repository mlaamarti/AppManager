@include('layouts.header',['title'=>'Home'])




           <!-- main -->
            <main>
                <div class="container-fluid">
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

                        <!--- Start Success --->
                            @if (session('success_is'))
                                <div class="alert alert-success alert-dismissible fade show alert-lm" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                    {!! session('success_is') !!}
                                </div>
                            @endif

                        <!--- Start Success --->
                            @if (session('error_is'))
                                <div class="alert alert-success alert-dismissible fade show alert-lm" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                    {!! session('error_is') !!}
                                </div>
                            @endif
                            <div class="top-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-card-1">
                                <div class="left">
                                    <img src="{{asset('images/me.png')}}" style="height:50px !important" height="50px"  alt="" class="img-fluid">
                                </div>
                                <div class="right">
                                    <h3 class="text-orange">{{$data['totale_acc']}}</h3>
                                    <p>Total Accounts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget-card-1">
                                <div class="left">
                                    <img src="https://services.google.com/fh/files/newsletters/devconsole_logo.png" style="height:50px !important" height="50px" alt="" class="img-fluid">
                                </div>
                                <div class="right">
                                    <h3 class="text-green">{{$data['console']}}</h3>
                                    <p>Console Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget-card-1">
                                <div class="left">
                                    <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/logo_admob_800px_logo_admob.max-800x800.png" style="height:50px !important" height="50px" alt="" class="img-fluid">
                                </div>
                                <div class="right">
                                    <h3 class="text-purple">{{$data['admob']}}</h3>
                                    <p>Admob</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget-card-1">
                                <div class="left">
                                    <img src="https://www.facebook.com/images/ad_network/audience_network_icon.png" style="height:50px !important" height="50px" alt="" class="img-fluid">
                                </div>
                                <div class="right">
                                    <h3 class="text-pink">{{$data['facebook']}}</h3>
                                    <p>Facebook</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget2 bg-gradient3">
                                <div class="title">Total Application</div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <i class="fab fa-android"></i>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="count">{{$data['total_app']}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="widget2 bg-gradient8">
                                <div class="title">Publish</div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <i class="fab fa-google-play"></i>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="count">{{$data['active']}}</div>
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
                                        <div class="count">{{$data['suspend']}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="widget2 bg-gradient9">
                                <div class="title">With Ads</div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <i class="fas fa-ad"></i>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="count">{{$data['apps_with_ads']}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="widget2 bg-gradient10">
                                <div class="title">Without Ads</div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <i class="fas fa-ad"></i>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="count">{{$data['apps_without_ads']}}</div>
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
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ink" style="float:right">
                                <style>
                                    .load_lm{
                                        display: none;
                                    }
                                </style>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_application">Add New App</button>
                                <button type="button" class="btn btn-info c_load_lm"><i class="fas fa-sync"></i></button>
                                <button class="btn btn-info load_lm" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Application Details</h5>
                                    <div class="table-responsive-lg">
                                        <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Icon</th>
                                                    <th>PackageName</th>
                                                    <th>Name</th>
                                                    <th>Date (P)</th>
                                                    <th>Age</th>
                                                    <th>Install</th>
                                                    <th>Review</th>
                                                    <th>Ad Status</th>
                                                    <th><i class="fas fa-cog"></i></th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            @foreach($data["application_all"] as $apps)
                                                <tr>
                                                    <td>
                                                        @if($apps->status == 0)<span class="badge badge-danger">Suspend</span>@endif
                                                        @if($apps->status == 1) <span class="badge badge-success">Active</span>@endif
                                                    </td>
                                                    <td>
                                                        <a href="play.google.com/store/apps/details?id={{$apps->packageName}}">
                                                            @if(empty($apps->icon))
                                                                <img src="{{asset('images/default-app.png')}}" alt="user" height="50" style="height:50px !important;width: 50px !important;" class="rounded-circle">
                                                            @endif

                                                            @if(!empty($apps->icon))
                                                                <img src="{{ $apps->icon}}" alt="user" height="50" style="height:50px !important;width: 50px !important;" class="rounded-circle">
                                                            @endif
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a target="_blank"  style="color: #0b96e5" href="https://play.google.com/store/apps/details?id={{$apps->packageName}}">
                                                            {{ \Illuminate\Support\Str::limit($apps->packageName, 20, $end='...') }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a  target="_blank" href="https://play.google.com/store/apps/details?id={{$apps->packageName}}">{{$apps->title}}</a>
                                                    </td>
                                                    <td>{{date('d-m-Y', strtotime($apps->created_at))}}</td>

                                                    @php
                                                        $earlier = new DateTime(date('d-m-Y'));
                                                        $later = new DateTime(date('d-m-Y', strtotime($apps->created_at)));

                                                        $diff = $later->diff($earlier)->format("%a");

                                                    @endphp

                                                    <td>{{$diff}} Days</td>
                                                    <td>{{$apps->installs}}</td>
                                                    <td>{{$apps->review}}</td>
                                                    <td>
                                                        @if($apps->ad_status == 0)<span class="badge badge-danger">Suspend</span>@endif
                                                        @if($apps->ad_status == 1) <span class="badge badge-success">Active</span>@endif
                                                    </td>
                                                    <td data-id="{{$apps->id}}">
                                                        <form action="{{route('application.is_suspend')}}" method="post">
                                                        <button type="button" class="flat-btn flat-btn-info btn bg-blue about_application" data-toggle="modal" data-target="#about_application" >
                                                            <i class="fas fa-info"></i>
                                                        </button>
                                                        <button type="button" class="flat-btn flat-btn-warning btn bg-danger delete_application" data-color="yellow" data-toggle="modal" data-target="#delete_application">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>


                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$apps->id}}">
                                                            <input type="hidden" name="status" value="{{$apps->is_suspend}}">

                                                            @if(!$apps->is_suspend)
                                                                <button type="submit" class="btn-success btn bg-success">
                                                                    <i class="far fa-check-circle"></i>
                                                                </button>
                                                            @endif

                                                            @if($apps->is_suspend)
                                                            <button  type="submit" class="btn-danger btn ">
                                                                <i class="fas fa-ban"></i>
                                                            </button>
                                                            @endif

                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Icon</th>
                                                    <th>PackageName</th>
                                                    <th>Name</th>
                                                    <th>Date (P)</th>
                                                    <th>Age</th>
                                                    <th>Install</th>
                                                    <th>Review</th>
                                                    <th>Ad Status</th>
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


<!-- Add New Application -->
<div class="modal fade" id="add_new_application" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Application</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('application.store')}}" method="post">
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
                <label for="PackageName" class="col-sm-3 col-form-label">PackageName</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="PackageName" name="packagename" value="{{ old('packagename') }}" pattern="^(?:[a-zA-Z]+(?:\d*[a-zA-Z_]*)*)(?:\.[a-zA-Z]+(?:\d*[a-zA-Z_]*)*)+$" placeholder="com.exemple" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="TypeApplication" class="col-sm-3 col-form-label">Type Applcation</label>
                <div class="col-sm-9">
                    <select class="form-control" id="TypeApplication" name="type" required="required">
                        <option value="">Type Application</option>
                        <option value="Application">Application</option>
                        <option value="Game">Game</option>
                        <option value="Prank">Prank</option>
                        <option value="Guide">Guide</option>
                        <option value="Viral Apps">Viral Apps</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="TypeApplication" class="col-sm-3 col-form-label">Console Developer</label>
                <div class="col-sm-9">
                    <select class="form-control" id="TypeApplication" name="console" required="required">
                        <option value="">Select Console</option>
                        @foreach($data['acc_active'] as $dd)
                            @if($dd->type == "Console Developer")
                                <option value="{{$dd->id}}">{{$dd->email}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New Application</button>
      </div>
        </form>
    </div>
  </div>
</div>


<!-- Add About Application -->
<div class="modal fade" id="about_application" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">More Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <style>
            .slimScroll{
                overflow:scroll !important;
            }
        </style>
      </div>
      <div class="modal-body">
      <div class="card-body ">
        <div class="text-center">
            <img src="{{asset('images/default-app.png')}}" alt="" class="user-profile icon_m" style=" height: 80px;width: 80px; border-radius: 50%;">
            <p class="title_m">XXXXXX-XXXXXXXX</p>
            <p class="age_m">XXXXXX-XXXXXXXX Days</p>
            <p class="status_m">XXXXXX-XXXXXXXX</p>
        </div>
            <div class="slimScroll">
                <div class="activity-timeline">
                    <div class="activity-timeline-items">

                         <!--- PackageName Name --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text packagename_m">
                                <span style="color:green">PackageName -> </span>
                                <a href="#"> XXXXXX-XXXXXXXX</a>
                            </span>
                        </div>

                         <!--- Console Developer Name --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text developer_m">
                                <span style="color:green">Developer Name -> </span>
                                <a href="#"> XXXXXX-XXXXXXXX </a>
                            </span>
                        </div>

                        <!--- Type Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text type_m">
                                <span style="color:green">Type -> </span>
                                XXXXXX-XXXXXXXX
                            </span>
                        </div>

                        <!--- Category Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text category_m">
                                <span style="color:green">Category -> </span>
                                XXXXXX-XXXXXXXX
                            </span>
                        </div>

                        <!--- Installs Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text install_m">
                                <span style="color:green">Installs -> </span>
                                XXXXXX-XXXXXXXX
                            </span>
                        </div>

                        <!--- Review Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text reviw_m">
                                <span style="color:green">Review -> </span>
                                XXXXXX-XXXXXXXX
                            </span>
                        </div>


                         <!--- Date Publish --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text date_p_m"><span style="color:green">Date Publish -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- Date Update --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text date_p_u"><span style="color:green">Date Update -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- Current Version --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text current_version_m"><span style="color:green">Current Version -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- Console Developer Email --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text email_m"><span style="color:green">Email -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                        <!--- Description --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" style="color:green">Description :</label>
                                <textarea class="form-control description_m" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="activtity-timeline-item ads_status_alert" style="display: none">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb breadcrumb-icon bg-theme-warning">
                                    <li class="breadcrumb-item">
                                        <i class="lnr lnr-home mr-2" aria-hidden="true"></i>Application without ads</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        <div class="ads_status">
                            <div class="activtity-timeline-item">
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb breadcrumb-icon bg-theme-yellow">
                                    <li class="breadcrumb-item">
                                        <i class="lnr lnr-home mr-2" aria-hidden="true"></i>ADS Manager : <span style="color:#eb4235;" class="fullrate_a_m">Fill Rate Admob ->  XXX % </span> - <span style="color:#3553eb;" class="fullrate_f_m">Fill Rate facebook ->  XXX % </span>
                                    </li>
                                </ol>
                            </nav>
                            </div>

                            <!--- Status Ads--->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text"><span style="color:#007bff">ADS STATUS -> </span> <span class="badge badge-success ads_status_m">XXXXXX-XXXXXXXX</span> </span>
                            </div>

                            <!--- Status TYPE Ads--->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text"><span style="color:#007bff">ADS TYPE -> </span> <span class="badge badge-danger ads_type_m">XXXXXX-XXXXXXXX</span> </span>
                            </div>

                            <!--- Email Admob--->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text"><span style="color:#08bf12">EMAIL ADMOB -> </span> <span class="badge badge-dark email_admob_m">XXXXXX-XXXXXXXX</span> </span>
                            </div>


                            <!--- ID ADMOB--->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text id_admob_m"><span style="color:#eb4235">ID ADMOB -> </span> XXXXX-XXXXXX</span>
                            </div>

                            <!--- Banner ADMOB --->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text banner_admob_m"><span style="color:#eb4235">BANNER ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                            <!--- Interstitial ADMOB --->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text interstitial_admob_m"><span style="color:#eb4235">INTERSTITIAL ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                            <!--- Reward Video  ADMOB--->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text reward_admob_m"><span style="color:#eb4235">REWARD ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                             <!--- ADS TEXT  ADMOB--->
                             <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-danger"></span>
                                <span class="activity-timeline-text ads_text_m"><span style="color:#eb4235">ADS TEXT -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                            <!--- Native  ADMOB --->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text native_admob_m"><span style="color:#eb4235">NATIVE ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                            <!--- Email FAcebook--->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text"><span style="color:#73bf08">EMAIL FACEBOOK -> </span> <span class="badge badge-dark email_facebook_m">XXXXXX-XXXXXXXX</span> </span>
                            </div>

                            <!--- Facebook Banner --->
                            <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text banner_facebook_m"><span style="color:#584399">BANNER FACEBOOK -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                             <!--- Facebook INTERSTITIAL --->
                             <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text interstitial_facebook_m"><span style="color:#584399">INTERSTITIAL FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                             <!--- Facebook NATIVE --->
                             <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text native_facebook_m"><span style="color:#584399">NATIVE FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                             <!--- Facebook NATIVE BANNER --->
                             <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text native_banner_facebook_m"><span style="color:#584399">NATIVE BANNER FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
                            </div>

                             <!--- Facebook Medium Rectangle --->
                             <div class="activtity-timeline-item">
                                <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                                <span class="activity-timeline-text meduim_rectangle_facebook_m"><span style="color:#584399">MEDIUM RECTANGLE FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Add Delete Application -->
<div class="modal fade" id="delete_application" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          <form action="{{route('application.destroy')}}" method="post">
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
        $('#add_new_application').modal('show');
    </script>
@endif
