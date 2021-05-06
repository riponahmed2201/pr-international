@extends('backend.master')

@section('custom_css')

@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">All Team Member</h3>

                    <div class="card-tools">

                        <a href="{{ route('teamMember.create') }}" class="bg-purple btn">
                            <i class="fas fa-plus-circle"></i> Create Team Member
                        </a>
                    </div>
                </div>

                @include('backend.partials.message')

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Designation</th>
                          <th>Photo</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($teamMembers as $teamMember)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $teamMember->name }}</td>
                                <td>{{ $teamMember->email }}</td>
                                <td>{{ $teamMember->phone }}</td>
                                <td>{{ $teamMember->designation }}</td>
                                <td>
                                    <img style="width: 60px; height:60px" src="{{ asset('uploads/member_pic/'.$teamMember->photo) }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('teamMember.edit',$teamMember->id) }}" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> </a>
                                    <a href="{{ route('teamMember.delete',$teamMember->id) }}" class="btn btn-danger btn-xs"> <i class="fa fa-trash-alt"></i> </a>
                                </td>
                              </tr>
                            @endforeach

                      </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('custom_js')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
