@extends('layouts.app')
@section('content')
  <div class="row">
    <div id="responsive-table">
      <h4 class="header">Schedule of Courses</h4>
      <div class="row">
        <!--<div class="col s12 m4 l3">
        <p>These are your Module details</p>
        </div>-->
        <div class="col s12 m12 l12">
          <table class="bordered">
            <thead>
              <tr>
                <th data-field="teacher">Teacher</th>
                <th data-field="degree_elect">Degree Elect</th>
                <th data-field="degree_elect_hr">Degree Elect (Hours)</th>
                <th data-field="in_serv">In Serv</th>
                <th data-field="in_serv_hr">In Serv (Hours)</th>
                <th data-field="tlp">TLP</th>
                <th data-field="masters">Masters</th>
                <th data-field="masters_hr">Masters (Hours)</th>
                <th data-field="GESL">GESL</th>
                <th data-field="others">Others</th>
                <th data-field="others_hr">Others (Hours)</th>
                <th data-field="tp_no_of_tt_hr">TP no.of TT</th>
                <th data-field="tp_6hr">TP 6hrs/TT</th>
                <th data-field="total_hours">Total Hours</th>
              </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
            <tr>
              <td>{{ $teacher->name }}</td>
              @foreach($teacher->classes as $class)
                <td>{{ $class->venue }}</td>
              @endforeach
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
    <a class="btn-floating btn-large">
        <i class="mdi-action-stars"></i>
    </a>
    <ul>
        <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
        <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
        <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
        <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
    </ul>
</div>
@endsection
