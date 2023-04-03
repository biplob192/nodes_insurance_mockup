@extends('master')

@section('Title')
File Index
@endsection

@section('Style')
@endsection

@section('Content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><strong>Files</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">File Ref. No.</th>
                                                    <th style="text-align: center;">Location of Risk</th>
                                                    <th style="text-align: center;">Date</th>
                                                    <th style="text-align: center;">Risk Renewal Date</th>
                                                    <th style="text-align: center;">Insured Name </th>
                                                    <th style="text-align: center;">Status</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">101</td>
                                                    <td style="text-align: center;">F-38,Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">12/03/2023</td>
                                                    <td style="text-align: center;">17/03/2023</td>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center; color:#3CB371">Completed</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="{{route('files.show')}}">More</a>
                                                                <a class="dropdown-item" href="#" >Edit</a>
                                                                <a class="dropdown-item" href="#" >Delete</a>
                                                                <a class="dropdown-item" href="#" >Details</a>
                                                                <a class="dropdown-item" href="#" >Download</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">102</td>
                                                    <td style="text-align: center;">F-38,Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">13/03/2023</td>
                                                    <td style="text-align: center;">18/03/2023</td>
                                                    <td style="text-align: center;">Johnar Dewal</td>
                                                    <td style="text-align: center;color: #FFA500">Pending</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="{{route('files.show')}}">More</a>
                                                                <a class="dropdown-item" href="#" >Edit</a>
                                                                <a class="dropdown-item" href="#" >Delete</a>
                                                                <a class="dropdown-item" href="#" >Details</a>
                                                                <a class="dropdown-item" href="#" >Download</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">103</td>
                                                    <td style="text-align: center;">F-38,Justin Road,
                                                        <br> Hurdiyara sharani
                                                    </td>
                                                    <td style="text-align: center;">12/03/2023</td>
                                                    <td style="text-align: center;">17/03/2023</td>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center;color: #C11B17;"> Not Started</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" >
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="{{route('files.show')}}"> More</a>
                                                                <a class="dropdown-item" href="#" >Edit</a>
                                                                <a class="dropdown-item" href="#" >Delete</a>
                                                                <a class="dropdown-item" href="#" >Details</a>
                                                                <a class="dropdown-item" href="#" >Download</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection

@section('Script')
@endsection