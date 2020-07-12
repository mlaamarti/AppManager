@include('layouts.header',['title'=>'My Ads'])


<!-- main -->
<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <div class="top-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Ads</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="col-md-6">
                <div class="ink" style="float:right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Create_Custom_Ads">Create Custom Ads</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

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
                        <h5>My Ads Details</h5>
                        <div class="table-responsive-lg">
                            <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Status Ads</th>
                                    <th>Icon</th>
                                    <th>PackageName</th>
                                    <th>Type</th>
                                    <th>Date Creation</th>
                                    <th>Date Update</th>
                                    <th><i class="fas fa-cog"></i></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($data['myads'] as $myads)
                                    <tr>
                                        <td>
                                            @if($myads->status == 0)<span class="badge badge-danger">Suspend</span>@endif
                                            @if($myads->status == 1) <span class="badge badge-success">Active</span>@endif
                                        </td>
                                        <td>
                                            <a href="play.google.com/store/apps/details?id={{$myads->packageName}}">
                                                @if(empty($myads->icon))
                                                    <img src="{{asset('images/default-app.png')}}" alt="user" height="50" style="height:50px !important;width: 50px !important;" class="rounded-circle">
                                                @endif

                                                @if(!empty($myads->icon))
                                                    <img src="{{ $myads->icon }}" alt="user" height="50" style="height:50px !important;width: 50px !important;" class="rounded-circle">
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a style="color: #0b96e5" href="play.google.com/store/apps/details?id={{$myads->packageName}}">
                                                {{ \Illuminate\Support\Str::limit($myads->packageName, 20, $end='...') }}
                                            </a>
                                        </td>
                                        <td>{{$myads->type}}</td>
                                        <td>{{date('d-m-Y', strtotime($myads->created_at))}}
                                        </td>
                                        <td>{{date('d-m-Y', strtotime($myads->updated_at))}}</td>
                                        <td data-id="{{$myads->id}}">
                                            <button class="flat-btn flat-btn-info btn bg-blue Update_Custom_Ads" data-toggle="modal" data-target="#Update_Custom_Ads">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="flat-btn flat-btn-warning btn bg-danger delete_myads" data-color="yellow" data-toggle="modal" data-target="#delete_myads">
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
                                    <th>Type</th>
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

<div class="modal fade" id="Create_Custom_Ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Custom Ads</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('myads.store')}}" method="post">
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
                        <label for="Email" class="col-sm-3 col-form-label">Application</label>
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
                        <label for="TypeAccount" class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="type" required>
                                <option value="">Type Ads</option>
                                <option value="interstitial">Interstitial</option>
                                <option value="banner">Banner</option>
                                <option value="native">Native</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="TypeApplication" class="col-sm-3 col-form-label">List Ads</label>
                        <div class="col-sm-9">
                            <select class="form-control selectpicker" name="list_app">
                                @foreach($data['applications'] as $app)
                                    @if(!$app->is_suspend)
                                        <option data-tokens="{{$app->packageName}}">{{$app->packageName}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="about" class="col-sm-3 col-form-label">About App</label>
                        <div class="col-sm-9">
                           <textarea class="form-control" rows="3" name="about" placeholder="about application ..." required=""></textarea>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add New Ads</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="Update_Custom_Ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Custom Ads</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('myads.update')}}" method="post">
                @csrf

                    <div class="form-group row">
                        <label for="Email" class="col-sm-3 col-form-label">Application</label>
                        <div class="col-sm-9">
                            <input type="hidden" class="id_edit" name="id" value="">
                            <input type="hidden" name="application" class="application_edit" value="">
                            <select class="form-control selectpicker" id="application_edit" data-live-search="true" disabled>
                                @foreach($data['applications'] as $app)
                                    @if(!$app->is_suspend)
                                        <option data-tokens="{{$app->packageName}}">{{$app->packageName}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="TypeAccount" class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="type" class="type_ads" value="">
                            <select class="form-control type_edit" disabled>
                                <option value="">Type Ads</option>
                                <option value="interstitial">Interstitial</option>
                                <option value="banner">Banner</option>
                                <option value="native">Native</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="TypeApplication" class="col-sm-3 col-form-label">List Ads</label>
                        <div class="col-sm-9">
                            <select class="form-control selectpicker list_ads" name="list_app">
                                @foreach($data['applications'] as $app)
                                    @if(!$app->is_suspend)
                                        <option data-tokens="{{$app->packageName}}">{{$app->packageName}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="about" class="col-sm-3 col-form-label">About App</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" name="about" id="about" placeholder="about application ..." required=""></textarea>
                        </div>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update Ads</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--  Delete Account -->
<div class="modal fade" id="delete_myads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <form action="{{route('myads.destroy')}}" method="post">
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
        $('#Create_Custom_Ads').modal('show');
    </script>
@endif
