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
                        <h5 class="card-title"><strong>User</strong></h5>
                        <div class="float-sm-right ml-1">
                            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-lg" style="background-color: #D5D6EA;">+ Add User</button>
                        </div>
                        <div class="modal fade" id="modal-lg">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add User</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="name">User Name</label>
                                                            <input type="text" class="form-control" id="name" placeholder="Enter Role Name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Type of Role </label>
                                                            <select class="form-control">
                                                                <option>Admin</option>
                                                                <option>Management</option>
                                                                <option>Accountant</option>
                                                                <option>Claim Handler</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone Number</label>
                                                            <input type="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <!-- <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div> -->
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
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
                                                    <th style="text-align: center;">Name</th>
                                                    <th style="text-align: center;">Email</th>
                                                    <th style="text-align: center;">Role</th>
                                                    <th style="text-align: center;">Phone No.</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center;">john@gmail.com</td>
                                                    <td style="text-align: center;">Management</td>
                                                    <td style="text-align: center;">01624567832</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#" onclick="confirmDelete(event)">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center;">john@gmail.com</td>
                                                    <td style="text-align: center;">Management</td>
                                                    <td style="text-align: center;">01624567832</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#" onclick="confirmDelete(event)">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center;">john@gmail.com</td>
                                                    <td style="text-align: center;">Management</td>
                                                    <td style="text-align: center;">01624567832</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#" onclick="confirmDelete(event)">Delete</a>
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
<script src="vendor/sweetalert/sweetalert.all.js"></script>
<script>
    function confirmDelete(e) {
        e.preventDefault();

        const url = e.target.closest("a");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )

                // location.reload();
            }
        });
    }
</script>
@endsection