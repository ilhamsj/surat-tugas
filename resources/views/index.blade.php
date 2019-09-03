@extends('layouts.master')

{{-- <div class="card text-white bg-primary">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">Title</h4>
    <p class="card-text">Text</p>
  </div>
</div> --}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @include('inc/content/_pelaksana')
        </div>
        <div class="col-md-6">
            @include('inc/content/undangan/create')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'pdf', 
            ]
        } );
    } );
</script>
@endpush