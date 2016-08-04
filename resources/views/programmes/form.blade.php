@if(count($errors) > 0)
  <div class="row">
      <div class="input-field">
        @foreach($errors->all() as $error)
          <div class="error"> {{ $error }} </div>
        @endforeach
      </div>
  </div>
@endif
<div class="row">
  <div class="input-field col s12">

    <input type="text" name="programme_type_name" list="programme_types">
      <datalist id="programme_types">
          @foreach($programmeTypes as $programmeType)
            <option value="{{ $programmeType->name }}">
          @endforeach
      </datalist>
    <label>Select Programme Type*</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label for="name">Name*</label>
    <input id="name" type="text" name="name" datalist="programmes">
    <datalist id="programmes">
        @foreach($programmes as $programme)
            <option value="{{ $programme }}">
        @endforeach
    </datalist>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <select name="facilitator_id" value="{{ old('facilitator_id') }}">
      <option value="" disabled selected>Choose Facilitator</option>
      @foreach($facilitators as $facilitator)
        <option value="{{ $facilitator->id }}">{{ $facilitator->title }}</option>
      @endforeach
    </select>
    <label>Select Facilitator</label>
  </div>
</div>


<div class="row">
  <div class="input-field col s12">
    <select id="year" name="year" >
      <option value="{{ date('Y') }}" selected>{{ date('Y') }}</option>
      @for($i = 1; $i <= 20; $i++)
        <option value="{{ date('Y') + $i }}">{{ date('Y') + $i }}</option>
      @endfor
    </select>
    <label>Year</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m12 l12">
    <label for="recess_start_date">Recess Start Date</label>
    <input type="text" id="start_date" name="recess_start_date" >
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m12 l12">
    <label for="end_date">Recess End Date</label>
    <input type="text" name="end_date" id="end_date" >
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <select id="semester" name="semester" >
      @if(date('n') < 6)
        <option value="1" selected>1</option>
        <option value="2" >2</option>
      @else
        <option value="1" >1</option>
        <option value="2" selected>2</option>
      @endif
    </select>
    <label>Semester</label>
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
