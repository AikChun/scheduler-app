@extends('layouts.app')

@section('css')
  <link href="/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <style type="text/css">
  .input-field div.error{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
  .left-alert input[type=text] + label:after, 
  .left-alert input[type=password] + label:after, 
  .left-alert input[type=email] + label:after, 
  .left-alert input[type=url] + label:after, 
  .left-alert input[type=time] + label:after,
  .left-alert input[type=date] + label:after, 
  .left-alert input[type=datetime-local] + label:after, 
  .left-alert input[type=tel] + label:after, 
  .left-alert input[type=number] + label:after, 
  .left-alert input[type=search] + label:after, 
  .left-alert textarea.materialize-textarea + label:after{
      left:0px;
  }
  .right-alert input[type=text] + label:after, 
  .right-alert input[type=password] + label:after, 
  .right-alert input[type=email] + label:after, 
  .right-alert input[type=url] + label:after, 
  .right-alert input[type=time] + label:after,
  .right-alert input[type=date] + label:after, 
  .right-alert input[type=datetime-local] + label:after, 
  .right-alert input[type=tel] + label:after, 
  .right-alert input[type=number] + label:after, 
  .right-alert input[type=search] + label:after, 
  .right-alert textarea.materialize-textarea + label:after{
      right:70px;
  }
  </style>
@endsection
@section('content')
    <div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">Create new Course</h4>
            <div class="row">
                <form class="col s12 " method="POST" action="/courses/store" id="course_create_form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="programme_id" value="{{ old('programme_id') }}">
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
                            <label for="title">Title</label>
                            <input id="title" type="text" name="title" data-error=".errorTxt1">
                            <div class="errorTxt1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="AED10A" id="course_code" type="text" name="code" value="{{ old('code') }}">
                            <label for="code">Code</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="1-12" id="number_of_students" type="text" name="number_of_students" data-error=".errorTxt2" value="{{ old('number_of_students') }}">
                            <label for="number_of_students">Number Of Students</label>
                            <div class="errorTxt2"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="1-12" id="numberOfGroups" type="number" name="number_of_groups" value="{{ old('number_of_groups') }}">
                            <label for="number_of_groups">Number Of Groups</label>
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

  @section('js')
  <script type="text/javascript" src="/js/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jquery-validation/additional-methods.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
    //your code here

    $("#course_create_form").validate({
        rules: {
            title: {
                required: true,
                minlength: 5
            },
            number_of_students: {
              number: true,
              min: 1
            }
        },
        //For custom messages
        messages: {
            title: {
              required: "Enter a title",
              minlength: "Enter at least 5 characters"
            },
            number_of_students: {
              required: "Enter a number",
              min: "Minimum value of 1"
            }
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
  });
  </script>
  @endsection


@endsection
