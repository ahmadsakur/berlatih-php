@extends('AdminLTE.master')

@section('content')
<div class="card">
   <div class="card-header">
      <h3 class="text-center">Database Pertanyaan</h3>
   </div>
   <!-- /.card-header -->
   <div class="card-body">
      @if (session('success'))
      <div class="alert alert-success">
         {{session('success')}}
      </div>
      @endif
      <table class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>No</th>
               <th>Judul</th>
               <th>Pertanyaan</th>
               <th class="text-center justify-content-center m-0">Action</th>
            </tr>
         </thead>
         <tbody>
            @forelse ($pertanyaan as $key => $tanya)
            <tr>
               <td>{{ $key + 1}}</td>
               <td>{{$tanya->judul}}</td>
               <td>{{$tanya->isi}}</td>
               <td class="text-center justify-content-center">
                  <a href="pertanyaan/{{$tanya->id}}" class="btn btn-sm btn-primary">Detail</a>
                  <a href="pertanyaan/{{$tanya->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                  <form action="pertanyaan/{{$tanya->id}}" class="d-inline" method="POST">
                     @csrf
                     @method('DELETE')
                     <input type="submit" value="Delete" class="btn btn-sm btn-danger"></form>
               </td>
            </tr>
            @empty
            <tr>
               <td colspan="4" class="text-center">Tidak ada Data</td>
            </tr>
            @endforelse
         </tbody>
      </table>
   </div>
   <!-- /.card-body -->
</div>
@endsection

@push('scripts')
<script src="{{ asset('adminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
   $(function() {
      $(" #example1").DataTable();
   });
</script>
@endpush