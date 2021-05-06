@extends('backend.master')

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Team Member</h3>

                    <div class="card-tools">

                        <a href="{{ route('teamMember.index') }}" class="bg-purple btn">
                            <i class="fas fa-table"></i> All Team Member
                        </a>
                    </div>
                </div>

                @include('backend.partials.message')
                <!-- /.card-header -->
               <form action="{{ route('teamMember.update',  $teamMember->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $teamMember->name }}">
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $teamMember->email }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="{{ $teamMember->phone }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" class="form-control" placeholder="Enter designation" value="{{ $teamMember->designation }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" id="" cols="3" rows="3" class="form-control" placeholder="Enter designation">{{ $teamMember->address }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="photo" id="image" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-3">
                              <img id="image_preview" src="{{asset('uploads/member_pic/'.$teamMember->photo)}}" style="width: 100px;height: 100px">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
               </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection


@section('custom_js')
   <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            readURL(this);
        });
    </script>
@endsection
