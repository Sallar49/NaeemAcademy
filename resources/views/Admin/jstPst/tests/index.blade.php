@extends("Layout.Admin.master")
@section('title', 'JST / PST')
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
                        <a href="{{ route('admin.jst-pst.tests.add') }}" class="btn btn-primary btn-sm">New Test</a>
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
                                            <th>Test</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th class="text-nowrap text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($departments as $department)
                                            <tr>
                                                <td>{{ $department['name'] }}</td>
                                                <td>
                                                    @if ($department['status']['id'] == 1)
                                                        <div class="label label-table label-success">Active</div>
                                                    @else
                                                        <div class="label label-table label-danger">Inactive</div>
                                                    @endif
                                                </td>
                                                <td class="text-nowrap text-right">
                                                    <a href="{{ route('admin.departments.edit', $department['id']) }} "
                                                        class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    @if ($department['status']['id'] == 1)
                                                        <a href="{{ route('admin.departments.toggle_status', $department['id']) }}"
                                                            class="mr-25" data-toggle="tooltip"
                                                            data-original-title="Inactive">
                                                            <i class="fa fa-ban text-inverse m-r-10"></i> </a>
                                                    @else
                                                        <a href="{{ route('admin.departments.toggle_status', $department['id']) }}"
                                                            class="mr-25" data-toggle="tooltip"
                                                            data-original-title="Active">
                                                            <i class="fa fa-check text-inverse m-r-10"></i> </a>
                                                    @endif

                                                    <a href="javascript:void(0)" data-id="{{ $department['id'] }}"
                                                        data-toggle="tooltip" data-original-title="Delete" class="delete">
                                                        <i class="fa fa-trash text-danger"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach --}}
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

@push('links')
    <!--alerts CSS -->
    <link href="{{ asset('kenny/vendors/bower_components/sweetalert/dist/sweetalert.css') }}" rel="stylesheet"
        type="text/css">
@endpush
@push('scripts')
    <!-- Sweet-Alert  -->
    <script src="{{ asset('kenny/vendors/bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>

    <script type="text/javascript">
        $(".delete").click(function() {
            let id = $(this).data('id');
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcb03b",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function() {
                window.location.href = "{{ url('admin/departments/destroy') }}/" + id;
            });
        })
    </script>
@endpush