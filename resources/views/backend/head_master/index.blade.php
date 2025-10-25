@extends('backend.master')

@section('content')
<div class="right_col" role="main">
<h3>All Head Masters </h3>
<a href="{{ Route('head-master.create') }}" class="controlColor noBorder btn btn-primary btn-xs pull-right">Add</a>
<h2 class="test"> test </h2>
<div class="container mt-5">
    <h2 class="mb-4"> </h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Full Name </th>
                <th>Phone</th>
                <th>BirthDate</th>
                <th>Address</th>
                <th>  Image   </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>

@endsection
@push('js')
<script type="text/javascript">
    $(function () {

      var table = $('.yajra-datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('head-master.list') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'full_name', name: 'full_name'},
              {data: 'phone', name: 'phone'},
              {data: 'birthdate', name: 'birthdate'},
              {data: 'address', name: 'address'},
              {data: 'image', name: 'image'},

              {
                  data: 'action',
                  name: 'action',
                  orderable: true,
                  searchable: true
              },
          ]
      });

    });
   $('.test').hide();
  </script>
@endpush
