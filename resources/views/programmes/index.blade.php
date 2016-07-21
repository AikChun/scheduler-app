@extends('layouts.app')
@include('sidebars.admin')
@section('content')
<div class="row">
    <div id="responsive-table">
        <div class="row">
            <!--<div class="col s12 m4 l3">
                <p>These are your Module details</p>
            </div>-->
            <div class="col s12 m6 l6 offset-l3 offset-m3">
                <h4 class="header">List of Programmes</h4>
                <table class="bordered">
                    <thead>
                        <tr>
                            <th data-field="teacher">Programme</th>
                            <th data-field="degree_elect">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($programmes as $programme)
                    <tr>
                        <td>{{ $programme->name }}</td>
                        <td>{{ $programme->programmeType->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
