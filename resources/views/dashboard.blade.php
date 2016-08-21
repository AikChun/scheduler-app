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
          @foreach($programme['courses'] as $course)
            <li>
              <div class="collapsible-header ">
                <div class="col l4 m4 s4 " style="max-width: 500px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">{{ $course['title'] }} </div>  <div class="col s4 m4 l4"> Code:{{ $course['code'] }} </div>  <div class="col s3 m3 l3">Date: {{ date('d-m-Y', strtotime($course['start_date'])) . ' - '. date('d-m-Y', strtotime($course['end_date'])) }} </div>
              </div>
              <div class="collapsible-body">
                <div id="striped-table">
                  <div class="row">
                    <div class="col s12 m8 l9">
                      <table class="striped">
                        <thead>
                          <tr>
                            <th data-field="id">Name</th>
                            <th data-field="name">Item Name</th>
                            <th data-field="price">Item Price</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Alvin</td>
                          <td>Eclair</td>
                          <td>$0.87</td>
                        </tr>
                        <tr>
                          <td>Alan</td>
                          <td>Jellybean</td>
                          <td>$3.76</td>
                        </tr>
                        <tr>
                          <td>Jonathan</td>
                          <td>Lollipop</td>
                          <td>$7.00</td>
                        </tr>
                        <tr>
                          <td>Shannon</td>
                          <td>KitKat</td>
                          <td>$9.99</td>
                        </tr>
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
