@extends("Layout.Admin.master")

@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form action="{{ route('admin.category.store') }}" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <h6 class="txt-dark capitalize-font"><i class="icon-pencil mr-10"></i>New Category for {{$parent['title']}}</h6>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Title"
                                                            value="{{ old('title') }}">
                                                            <input type="hidden" name="parent_id" value="{{$parent['id']}}">
                                                        @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <!-- /Row -->
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Status</label>
                                                        <select class="form-control" name="status">
                                                            <option value="1" {{ ((old('status') == 1)?"selected":"" ) }}>Active</option>
                                                            <option value="2" {{ ((old('status') == 2)?"selected":"" ) }}>Inactive</option>
                                                        </select>
                                                        @error('status')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <div class="form-actions mt-10">
                                            <button type="submit" class="btn btn-success  mr-10"> Save</button>
                                            <a href="{{route("admin.interface")}}" class="btn btn-default">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
@endsection

@push('scripts')
    <script>
        $("#home_page").change(function() {
            if($(this).prop('checked')) {
                $("#priority").attr('disabled', false);
            }
            else {
                $("#priority").attr('disabled', true);
            }
        });
    </script>
@endpush


