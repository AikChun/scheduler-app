@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col s12 m6 l6 offset-l3 offset-m3">
    <div class="card-panel">
      <h4 class="header2">Create new Semester with existing schedule</h4>
      <div class="row">
          <form>
            <div class="row">
                <div class="row center-align">
                    From
                </div>
              <div class="input-field col l6 m6 s6">
                <select name="programmes_from_year" >
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                </select>
            </div>

              <div class="input-field col l6 m6 s6">
                <select name="programmes_from_semester" >
                    <option value="jan">jan</option>
                    <option value="jul">jul</option>
                </select>
              </div>
            </div>

            <div class="row">
                <div class="row center-align">
                    To
                </div>
              <div class="input-field col l6 m6 s6">
                <select name="programmes_from_year" >
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                </select>
            </div>

              <div class="input-field col l6 m6 s6">
                <select name="programmes_from_semester" >
                    <option value="jan">jan</option>
                    <option value="jul">jul</option>
                </select>
              </div>
            </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
//$('#date-end').bootstrapMaterialDatePicker({ weekStart : 0 });
</script>
@endsection
