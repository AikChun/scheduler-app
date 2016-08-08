@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col s12 m6 l6 offset-l3 offset-m3">
    <div class="card-panel">
      <h4 class="header2">Create new Course</h4>
      <div class="row">
        <form class="col s12 " method="POST" action="/courses" autocomplete="off">
          @include('courses.form')
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
//$('#date-end').bootstrapMaterialDatePicker({ weekStart : 0 });
$('#date-end').bootstrapMaterialDatePicker({ format : 'DD-MM-YYYY HH:mm' });
$('#date-start').bootstrapMaterialDatePicker({ format : 'DD-MM-YYYY HH:mm' }).on('change', function(e, date)
{
$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
});
</script>
@endsection
