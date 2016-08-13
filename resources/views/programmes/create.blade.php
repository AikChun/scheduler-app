@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col s12 m6 l6 offset-l3 offset-m3">
    <div class="card-panel">
      <h4 class="header2">Create new Programme</h4>
      <div class="row">
        <form class="col s12 " method="POST" action="/programmes" >
          {{ csrf_field() }}
          @include('programmes.form')
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
//$('#date-end').bootstrapMaterialDatePicker({ weekStart : 0 });
$('#recess_end_date').bootstrapMaterialDatePicker({ format : 'DD-MM-YYYY', time: false });
$('#recess_start_date').bootstrapMaterialDatePicker({ format : 'DD-MM-YYYY', time: false }).on('change', function(e, date)
{
$('#recess_end_date').bootstrapMaterialDatePicker('setMinDate', date);
});
</script>
@endsection
