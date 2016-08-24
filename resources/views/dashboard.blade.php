@extends('layouts.app')
@section('content')

@foreach($programmes as $programme)
  <div class="row">
    <div class="col s12 m12 l12">
      <h4>{{ $programme->name }}</h4>
    </div>
  </div>
  <br/>
  <div class="row">
    <div class="col s4 m4 l4">
      <b> {{ $programme->programme_type->name }} </b>
    </div>
    <div class="col s4 m4 l4">
      <b> Facilitator: {{ $programme->facilitator->name }} </b>
    </div>
    <div class="col s4 m4 l4" >
      <b>Date: {{ date('d-m-Y', strtotime($programme->recess_start_date)) }} - {{ date('d-m-Y', strtotime($programme->recess_end_date)) }}</b>
    </div>
  </div>
  <br/>
  <div id="accordion" class="section">
    <div class="row">
      <div class="col s12 m12 l12 ">
        <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
          @foreach($programme->courses as $course)
            @if(count($course->classes) == 0)
              <?php continue; ?>
            @endif
            <li>
              <div class="collapsible-header ">
                <div class="col l4 m4 s4 " style="max-width: 500px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">{{ $course->title }} </div>  <div class="col s4 m4 l4"> Code:{{ $course->code }} </div>  <div class="col s3 m3 l3">Date: {{ date('d-m-Y', strtotime($course->start_date)) . ' - '. date('d-m-Y', strtotime($course->end_date)) }} </div>
              </div>
              <div class="collapsible-body">
                <div id="striped-table">
                  <div class="row">
                    <div class="col s12 m12 l12">
                      <table class="striped" style="float:center;">
                        <thead>
                          <tr>
                            <th data-field="group_name">Group Name</th>
                            <th data-field="number_of_students">Number Of Students</th>
                            <th data-field="teacher">Teacher</th>
                            <th data-field="hours">Total Hours</th>
                            <th data-field="day">Day</th>
                            <th data-field="time">Time</th>
                            <th data-field="venue">Venue</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($course->classes as $class)
                          <tr>
                            <td>{{ $class->group_name }}</td>
                            <td>{{ $class->number_of_students }}</td>
                            <td>{{ $class->lecturer->name }}</td>
                            <td>{{ $class->total_hours }}</td>
                            <td>{{ $class->day }}</td>
                            <td>{{ $class->start_time . ' - ' . $class->end_time }}</td>
                            <td>{{ $class->venue }}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          @endforeach

        </ul>
      </div>
    </div>

  </div>
@endforeach

@endsection
