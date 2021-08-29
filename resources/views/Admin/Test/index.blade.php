@extends("Layout.Admin.master")

@section('content')

    <div class="row">

        <!-- Bordered Table -->
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Tests</h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('admin.tests.add') }}" class="btn btn-primary btn-sm">New Test</a>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap ">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Home Page Active</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lunar probe project</td>
                                            <td>
                                                <div class="label label-table label-success">Active</div>
                                                <div class="label label-table label-danger">Inactive</div>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <div class="label label-table label-success">Active</div>
                                                <div class="label label-table label-danger">Inactive</div>
                                            </td>
                                            <td class="text-nowrap">
                                                <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="View">
                                                    <i class="fa fa-eye text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                        class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bordered Table -->

    </div>

@endsection
