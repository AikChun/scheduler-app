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
              <col width="50"> <!-- Code -->
              <col width="200"> <!-- Module Title -->
              <col width="50"> <!-- Number of groups -->
              <col width="50"> <!-- Number of students -->
              <col width="50"> <!-- Group No. -->
              <col width="50"> <!-- Staff -->
              <col width="50"> <!-- Hours -->
              <col width="100"> <!-- Day -->
              <col width="50"> <!-- Time -->
              <col width="50"> <!-- Venue -->
              <tr>
                <th data-field="code">Code</th>
                <th data-field="module_title">Module Title</th>
                <th data-field="number_of_groups">No. of groups</th>
                <th data-field="number_of_students">No. of students</th>
                <th data-field="group number">Group No.</th>
                <th data-field="number_of_students">Staff</th>
                <th data-field="hours">Hours</th>
                <th data-field="day">Day</th>
                <th data-field="time">Time</th>
                <th data-field="venue">Venue</th>
              </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
              <td> {{ $course->code }}</td>
              <td> {{ $course->title }}</td>
              <td> {{ $course->number_of_groups }}</td>
              <td> {{ $course->number_of_students }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
              @foreach($course->classes as $class)
              <tr>
                <td> </td>
                <td> {{ $class->group_name }} </td>
                <td> </td>
                <td> {{ $class->number_of_students }}</td>
                <td> {{ $class->group_number }}</td>
                <td> {{ $class->lecturer->name }}</td>
                <td> {{ $class->hours }}</td>
                <td> {{ explode(' ',$class->start_date)[0] }}</td>
                <td> {{ explode(' ', $class->start_date)[2] }}</td>
                <td> {{ $class->venue }}</td>
              </tr>
              @endforeach
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
