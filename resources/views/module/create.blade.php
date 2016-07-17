@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">Create new Course</h4>
            <div class="row">
                <form class="col s12" method="POST" action="/modules/store">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="programme_id">
                                <option value="" disabled selected>Choose Programme</option>
                                <option value="1">Degree</option>
                                <option value="2">Diploma</option>
                                <option value="3">PGDE - Primary</option>
                                <option value="4">PGDE - Secondary</option>
                                <option value="5">In Service</option>
                                <option value="6">Master In Education</option>
                                <option value="7">Doctor In Education</option>
                                <option value="8">Master Of Teaching</option>
                                <option value="9">Master Of Arts In Applied Psychology</option>
                                <option value="10">Master Of Arts In Counselling & Guidance</option>
                                <option value="11">Others</option>
                            </select>
                            <label>Select Programme</label>

                        </div>                        
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Educational Psychology I: Theories and Applications for Learning and Teaching" id="name2" type="text" name="title">
                            <label for="course_title">Title</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="AED10A" id="course_code" type="text" name="code">
                            <label for="code">Code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="1-12" id="numberOfStudents" type="text" name="number_of_students">
                            <label for="number_of_students">Number Of Students</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
