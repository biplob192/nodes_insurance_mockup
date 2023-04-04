@extends('master')

@section('Title')
Category Index
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
                        <h5 class="card-title"><strong>CATEGORY LIST</strong></h5>
                        <div class="float-sm-right ml-1">
                            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-lg">Add New</button>
                        </div>
                        <div class="modal fade" id="modal-lg">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Category</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="user_type">Category Type</label>
                                                    <select class="form-control" name="user_type">
                                                        <option value="1">Type 1</option>
                                                        <option value="2" selected>Type 2</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea type="textarea" class="form-control" id="description" placeholder="Enter description" name="description"></textarea>
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
                                                    <th>ID</th>
                                                    <th>Type</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>121</td>
                                                    <td>Type 1</td>
                                                    <td>Bacon ipsum dolor sit amet salami venison chicken.</td>
                                                    <td>
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
                                                    <td>122</td>
                                                    <td>Type 2</td>
                                                    <td>Venison chicken flank fatback doner.</td>
                                                    <td>
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
                                                    <td>123</td>
                                                    <td>Type 1</td>
                                                    <td>Bacon ipsum flank fatback doner.</td>
                                                    <td>
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
