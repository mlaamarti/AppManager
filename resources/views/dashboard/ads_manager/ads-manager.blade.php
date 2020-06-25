@include('layouts.header',['title'=>'Manage Accounts'])


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
                            <div class="count">1503</div>
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
                    <div class="title">Facebook</div>
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
                    <div class="title">Admob</div>
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
                <div class="card">
                    <div class="card-body">
                        <h5>Accounts Details</h5>
                        <div class="table-responsive-lg">
                            <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Country</th>
                                    <th>Ip</th>
                                    <th>Date Creation</th>
                                    <th>Date Update</th>
                                    <th><i class="fas fa-cog"></i></th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <span class="badge badge-danger">Suspend</span>
                                    </td>
                                    <td>laamarti.lm.93@gmail.com</td>
                                    <td>Facebook</td>
                                    <td>Morocco</td>
                                    <td>123.23.23.23</td>
                                    <td>2008/11/28</td>
                                    <td>2008/11/28</td>
                                    <td>
                                        <button class="flat-btn flat-btn-info btn bg-blue" data-toggle="modal" data-target="#edit_account" >
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="flat-btn flat-btn-warning btn bg-danger" data-color="yellow" data-toggle="modal" data-target="#delete_account">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Country</th>
                                    <th>Ip</th>
                                    <th>Date Creation</th>
                                    <th>Date Update</th>
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
                <form>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Application</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="application">
                                <option>Select Application</option>
                                <option>Select Application</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-danger btn-rect text-uppercase" type="button">
                            Admob
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Admob Account</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="application">
                                <option>Select Admob</option>
                                <option>Select Application</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_admob">ADMOB ID</label>
                            <input type="text" class="form-control" id="id_admob" placeholder="id admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ads_text">ADS TEXT</label>
                            <input type="text" class="form-control" id="ads_text" placeholder="ads text">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_admob">ADMOB BANNER</label>
                            <input type="text" class="form-control" id="banner_admob" placeholder="banner admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_admob">ADMOB INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_admob" placeholder="interstitial admob">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_admob">ADMOB NATIVE</label>
                            <input type="text" class="form-control" id="native_admob" placeholder="native admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_admob">ADMOB REWARD</label>
                            <input type="text" class="form-control" id="reward_admob" placeholder="reward admob">
                        </div>
                    </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-primary btn-rect text-uppercase" type="button">
                            Audiance Network
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Facebook Account</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="application">
                                <option>Select Account</option>
                                <option>Select Application</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_facebook">FACEBOOK BANNER</label>
                            <input type="text" class="form-control" id="banner_facebook" placeholder="banner facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_facebook">FACEBOOK INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_facebook" placeholder="interstitial facebook">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_facebook">FACEBOOK NATIVE</label>
                            <input type="text" class="form-control" id="native_admob" placeholder="native facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_facebook">FACEBOOK NATIVE BANNER</label>
                            <input type="text" class="form-control" id="reward_facebook" placeholder="reward facebook">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="medium_rectangle_facebook">FACEBOOK MEDIUM RECTANGLE</label>
                            <input type="text" class="form-control" id="medium_rectangle_facebook" placeholder="Medium Rectangle facebook">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create Property</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Property -->
<div class="modal fade" id="edit_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Property</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <style>
                    .slimScroll{
                        overflow:scroll !important;
                    }
                </style>
            </div>
            <div class="modal-body" style="height: 500px;overflow: scroll;">
                <form>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Application</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="application">
                                <option>Select Application</option>
                                <option>Select Application</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-dark btn-rect text-uppercase" type="button">
                            Settings
                        </button>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ads_type" class="col-sm-3 col-form-label">Ads Type</label>
                            <select class="form-control" id="ads_type">
                                <option>Select Type Ads</option>
                                <option>Select Application</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label col-sm-3 pt-0">Status</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="active" checked="">
                                    <label class="form-check-label" for="gridRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="suspend">
                                    <label class="form-check-label" for="gridRadios2">
                                        Suspend
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-danger btn-rect text-uppercase" type="button">
                            Admob
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Admob Account</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="application">
                                <option>Select Admob</option>
                                <option>Select Application</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_admob">ADMOB ID</label>
                            <input type="text" class="form-control" id="id_admob" placeholder="id admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ads_text">ADS TEXT</label>
                            <input type="text" class="form-control" id="ads_text" placeholder="ads text">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_admob">ADMOB BANNER</label>
                            <input type="text" class="form-control" id="banner_admob" placeholder="banner admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_admob">ADMOB INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_admob" placeholder="interstitial admob">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_admob">ADMOB NATIVE</label>
                            <input type="text" class="form-control" id="native_admob" placeholder="native admob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_admob">ADMOB REWARD</label>
                            <input type="text" class="form-control" id="reward_admob" placeholder="reward admob">
                        </div>
                    </div>

                    <div class="form-group row">
                        <button class="flat-btn btn-block flat-btn-primary btn-rect text-uppercase" type="button">
                            Audiance Network
                        </button>
                    </div>

                    <div class="form-group row">
                        <label for="application" class="col-sm-3 col-form-label">Facebook Account</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="application">
                                <option>Select Account</option>
                                <option>Select Application</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="banner_facebook">FACEBOOK BANNER</label>
                            <input type="text" class="form-control" id="banner_facebook" placeholder="banner facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="interstitial_facebook">FACEBOOK INTERSTITIAL</label>
                            <input type="text" class="form-control" id="interstitial_facebook" placeholder="interstitial facebook">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="native_facebook">FACEBOOK NATIVE</label>
                            <input type="text" class="form-control" id="native_admob" placeholder="native facebook">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reward_facebook">FACEBOOK NATIVE BANNER</label>
                            <input type="text" class="form-control" id="reward_facebook" placeholder="reward facebook">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="medium_rectangle_facebook">FACEBOOK MEDIUM RECTANGLE</label>
                            <input type="text" class="form-control" id="medium_rectangle_facebook" placeholder="Medium Rectangle facebook">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Update Property</button>
            </div>
        </div>
    </div>
</div>



<!--  Delete Account -->
<div class="modal fade" id="delete_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
