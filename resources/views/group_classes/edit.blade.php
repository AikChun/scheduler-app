@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col s12 m6 l6 offset-l3 offset-m3">
    <div class="card-panel">
      <h4 class="header2">Create new Course</h4>
      <div class="row">
        <form class="col s12 " method="POST" action="/group_classes/{{ $groupClass->id }}" >
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          @include('group_classes.form_edit')
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
//$('#date-end').bootstrapMaterialDatePicker({ weekStart : 0 });
$('#start_time').bootstrapMaterialDatePicker({ format : 'HH:mm', date: false });
$('#end_time').bootstrapMaterialDatePicker({ format : 'HH:mm', date: false }).on('change', function(e, date)
{
$('#end_time').bootstrapMaterialDatePicker('setMinDate', date);
});
</script>
@endsection
