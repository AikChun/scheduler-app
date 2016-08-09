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
  <div class="row">
      <div>
        <div class="row">
          <!--<div class="col s12 m4 l3">
          <p>These are your Module details</p>
          </div>-->
          <div class="col s12 m12 l12">
            <table class="bordered centered">
              <thead>
                <col width="50"> <!-- Code -->
                <col width="130"> <!-- Module Title -->
                <col width="50"> <!-- Number of groups -->
                <col width="50"> <!-- Number of students -->
                <col width="50"> <!-- Group No. -->
                <col width="50"> <!-- Staff -->
                <col width="50"> <!-- Hours -->
                <col width="50"> <!-- Day -->
                <col width="50"> <!-- Time -->
                <col width="50"> <!-- Venue -->
                <tr>
                  <th data-field="code" style="text-align:center;">Code</th>
                  <th data-field="module_title"style="text-align:center;">Module Title</th>
                  <th data-field="number_of_groups" style="text-align:center;" >No. of grps</th>
                  <th data-field="number_of_students" style="text-align:center;">No. of stud</th>
                  <th data-field="group number" style="text-align:center;">Group No.</th>
                  <th data-field="number_of_students" style="text-align:center;">Staff</th>
                  <th data-field="hours" style="text-align:center;">Hours</th>
                  <th data-field="day" style="text-align:center;">Day</th>
                  <th data-field="time" style="text-align:center;">Time</th>
                  <th data-field="venue" style="text-align:center;">Venue</th>
                </tr>
              </thead>
              <tbody>
                @foreach($programme->courses as $course)
                <tr>
                  <td>
                    {{ $course->code }}
                  </td>
                  <td> {{ $course->title }}
                    <br>
                    @foreach($course->classes as $class)
                      <br>
                      {{ $class->group_name }}
                      <br>
                    @endforeach
                </td>
                <td>

                  {{ $course->number_of_groups }}

                    @foreach($course->classes as $class)
                      <br>
                      <br>
                    @endforeach

                </td>
                <td>
                  {{ $course->number_of_students }}
                    @foreach($course->classes as $class)
                      <br>
                      <br>
                    @endforeach
                </td>
                <td>
                  <br>
                  <br>
                  @foreach($course->classes as $class)
                    <br>
                    {{ $class->group_number }}
                    <br>
                  @endforeach
                </td>
                <td>
                  <br>
                  <br>
                  @foreach($course->classes as $class)
                    <br>
                    {{ $class->lecturer->name }}
                    <br>
                  @endforeach
                </td>
                <td>
                  <br>
                  <br>
                  @foreach($course->classes as $class)
                    <br>
                    {{ $class->hours }}
                    <br>
                  @endforeach
                </td>
                <td>
                  <br>
                  <br>
                  @foreach($course->classes as $class)
                    <br>
                      {{ explode(' ',$class->start_date)[0] }}
                    <br>
                  @endforeach
                </td>
                <td>
                  <br>
                  <br>
                  @foreach($course->classes as $class)
                    <br>
                      {{ explode(' ',$class->start_date)[2] }}
                    <br>
                  @endforeach

                </td>
                <td>
                  <br>
                  <br>
                  @foreach($course->classes as $class)
                    <br>
                      {{ $class->venue }}
                    <br>
                  @endforeach
                </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endforeach

@endsection
