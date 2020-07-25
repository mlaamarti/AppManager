@include('layouts.header',['title'=>'Manage Ads'])


<!-- main -->
<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4">
                <div class="widget2 bg-gradient3">
                    <div class="title">Total Ads</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['totale_user']}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget2 bg-gradient8">
                    <div class="title">Active</div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <i class="fas fa-ad"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="count">{{$data['active']}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget2 bg-gradient1">
                    <div class="title">Ban User</div>
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

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="top-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ad Protector</li>
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

                <div class="card">
                    <div class="card-body">
                        <h5>Ad Protector Details</h5>
                        <div class="table-responsive-lg">
                            <table id="data1" class="display table table-bordered table-striped table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Status User</th>
                                    <th>Icon</th>
                                    <th>PackageName</th>
                                    <th>Ip</th>
                                    <th>Date Create</th>
                                    <th>Date Update</th>
                                    <th><i class="fas fa-cog"></i></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($data['all'] as $ads)
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
                                        <td>{{$ads['ip']}}</td>
                                        <td>{{$ads['created_at']}}</td>
                                        <td>{{$ads['updated_at']}}</td>
                                        <td data-id="{{$ads['id']}}">
                                            <button class="flat-btn flat-btn-warning btn bg-danger delete_User" data-color="yellow" data-toggle="modal" data-target="#delete_User">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Status User</th>
                                    <th>Icon</th>
                                    <th>PackageName</th>
                                    <th>Ip</th>
                                    <th>Date Create</th>
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

<!--  Delete Account -->
<div class="modal fade" id="delete_User" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <form action="{{route('adProtector.destroy')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id_delete" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
