@extends('layouts.app')
@include('forms.validation_css')
@include('sidebars.admin')
@section('content')
<div class="row">
    <div class="col s12 m6 l6 offset-l3 offset-m3">
        <div class="card-panel">
            <h4 class="header2">Create new Programme</h4>
            <div class="row">
                <form class="col s12 " method="POST" action="/programmes/store" id="create_programme_form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="programme_type_id" name="programme_type_id" >
                                <option value="" disabled selected>Choose Programme Type</option>
                                @foreach($programmeTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <label>Select Programme Type*</label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="name">Name*</label>
                            <input id="name" type="text" name="name" data-error=".errorTxt1">
                            <div class="errorTxt1"></div>
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
@section('js')
  @include('forms.validation_js')
  <script type="text/javascript">
$(document).ready(function () {
  $("#create_programme_form").validate({
    rules: {
      programme_type_id: {
        required: true
      },
      name: {
        required: true
      }
    },
    //For custom messages
    messages: {
      programme_type_id: {
        required: "Select a programme type"
      },
      name: {
        required: "Enter a name for your programme"
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
