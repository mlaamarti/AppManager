@include('layouts.header',['title'=>'Ads Accounts']) 

  
           <!-- main -->
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
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
                                    <h3 class="text-orange">234</h3>
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
                                    <h3 class="text-green">565</h3>
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
                                    <h3 class="text-purple">33</h3>
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
                                    <h3 class="text-pink">3</h3>
                                    <p>Facebook</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="widget2 bg-gradient3">
                                <div class="title">Total Application</div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <i class="fab fa-android"></i>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="count">1503</div>
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
                                        <div class="count">1503</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="widget2 bg-gradient12">
                                <div class="title">Pending</div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <i class="fas fa-spinner"></i>
                                    </div>
                                    <div class="col-6 text-right">
                                        <div class="count">122</div>
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
                                        <div class="count">122</div>
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
                                        <div class="count">122</div>
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
                                        <div class="count">122</div>
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_application">Add New App</button>
                                <button type="button" class="btn btn-info"><i class="fas fa-sync"></i></button>
                                <button class="btn btn-info" type="button" disabled>
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
                                                    <th>Name</th>
                                                    <th>Date (P)</th>
                                                    <th>Date (U)</th>
                                                    <th>Age</th>
                                                    <th>Install</th>
                                                    <th>Review</th>
                                                    <th>Ad Status</th>
                                                    <th>Ad Type</th>
                                                    <th><i class="fas fa-cog"></i></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="badge badge-danger">Suspend</span>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <img src="https://via.placeholder.com/150" alt="user" height="50" style="height:50px !important" class="rounded-circle">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">GBWhats App Plus</a>
                                                    </td>
                                                    <td>2008/11/28</td>
                                                    <td>2008/11/28</td>
                                                    <td>22 Days</td>
                                                    <td>+ 2000000</td>
                                                    <td>12332 3/5</td>
                                                    <td><span class="badge badge-danger">Suspend</span></td>
                                                    <td>Facebook</td>
                                                    <td>
                                                        <button class="flat-btn flat-btn-info btn bg-blue" data-toggle="modal" data-target="#about_application" >
                                                            <i class="fas fa-info"></i>
                                                        </button>
                                                        <button class="flat-btn flat-btn-warning btn bg-danger" data-color="yellow" data-toggle="modal" data-target="#delete_application">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button></td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Icon</th>
                                                    <th>Name</th>
                                                    <th>Date (P)</th>
                                                    <th>Date (U)</th>
                                                    <th>Age</th>
                                                    <th>Install</th>
                                                    <th>Review</th>
                                                    <th>Ad Status</th>
                                                    <th>Ad Type</th>
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
        <form>
            <div class="form-group row">
                <label for="PackageName" class="col-sm-3 col-form-label">PackageName</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="PackageName" placeholder="com.exemple">
                </div>
            </div>

            <div class="form-group row">
                <label for="TypeApplication" class="col-sm-3 col-form-label">Type Applcation</label>
                <div class="col-sm-9">
                    <select class="form-control" id="TypeApplication">
                        <option>Type Application</option>
                        <option>Application</option>
                        <option>Game</option>
                        <option>Prank</option>
                        <option>Guide</option>
                        <option>Viral Apps</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="TypeApplication" class="col-sm-3 col-form-label">Console Developer</label>
                <div class="col-sm-9">
                    <select class="form-control" id="TypeApplication">
                        <option>Select Console</option>
                        <option>Application</option>
                    </select>
                </div>
            </div>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add New Application</button>
      </div>
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
            <img src="https://lh3.googleusercontent.com/UG2AXoHnsEeretioeOLIM41w5j_1g8UT6XianicribaFo1d38uMSWWHmieMx7F_6XYVe=s360" alt="" class="user-profile" style=" height: 80px; border-radius: 50%;">
            <p>GB Whatsapp Latest Version - amizng version gb</p>  
            <p>12 Days</p>   
            <p><span class="badge badge-success">Active</span></p>            
        </div>
            <div class="slimScroll">
                <div class="activity-timeline">
                    <div class="activity-timeline-items">

                         <!--- PackageName Name --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text">
                            <span style="color:green">PackageName -> </span><a href="#"> musicplayer.player.music.toooop</a>
                            </span>
                        </div>

                         <!--- Console Developer Name --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text">
                            <span style="color:green">Developer Name -> </span><a href="#"> SIMo Inc.</a>
                            </span>
                        </div>

                        <!--- Type Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Type -> </span> Application</span>
                        </div>

                        <!--- Category Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Category -> </span> Communication</span>
                        </div>

                        <!--- Installs Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Installs -> </span> +10000</span>
                        </div>

                        <!--- Review Name --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Review -> </span> 3.5/5 | 12333</span>
                        </div>


                         <!--- Date Publish --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Date Publish -> </span> 12/09/2020</span>
                        </div>

                         <!--- Date Update --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Date Update -> </span> 12/08/2020</span>
                        </div>

                         <!--- Current Version --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Current Version -> </span> 1.0</span>
                        </div>

                         <!--- Console Developer Email --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:green">Email -> </span> laamarti.lm.93@gmail.com</span>
                        </div>

                        <!--- Description --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" style="color:green">Description :</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="activtity-timeline-item">
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb breadcrumb-icon bg-theme-yellow">
                                <li class="breadcrumb-item">
                                    <i class="lnr lnr-home mr-2" aria-hidden="true"></i>ADS Manager
                                </li>
                            </ol>
                        </nav>
                        </div>

                        <!--- Status Ads--->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#007bff">ADS STATUS -> </span> <span class="badge badge-success">Active</span> </span>
                        </div>

                        <!--- Status TYPE Ads--->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#007bff">ADS TYPE -> </span> <span class="badge badge-danger">FACEBOOK</span> </span>
                        </div>


                        <!--- ID ADMOB--->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#eb4235">ID ADMOB -> </span> XXXXX-XXXXXX</span>
                        </div>

                        <!--- Banner ADMOB --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#eb4235">BANNER ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                        <!--- Interstitial ADMOB --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#eb4235">INTERSTITIAL ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                        <!--- Reward Video  ADMOB--->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#eb4235">REWARD ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- ADS TEXT  ADMOB--->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-danger"></span>
                            <span class="activity-timeline-text"><span style="color:#eb4235">ADS TEXT -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                        <!--- Native  ADMOB --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#eb4235">NATIVE ADMOB -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                        <!--- Facebook Banner --->
                        <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#584399">BANNER_FACEBOOK -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- Facebook INTERSTITIAL --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#584399">INTERSTITIAL_FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- Facebook NATIVE --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#584399">NATIVE_FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- Facebook NATIVE BANNER --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#584399">NATIVE_BANNER_FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
                        </div>

                         <!--- Facebook Medium Rectangle --->
                         <div class="activtity-timeline-item">
                            <span class="activity-timeline-badge activity-timeline-badge-success"></span>
                            <span class="activity-timeline-text"><span style="color:#584399">MEDIUM_RECTANGLE_FACEBOOK  -> </span> XXXXXX-XXXXXXXX</span>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div> 
