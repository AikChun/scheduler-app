@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col s12 m6 l6 offset-l3 offset-m3">
    <div class="card-panel">
      <h4 class="header2">Create new Programme</h4>
      <div class="row">
        <form class="col s12 " method="POST" action="/programme-types" >
          {{ csrf_field() }}
          @include('programme-types.form')
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
