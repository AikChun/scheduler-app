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
      <input type="text" name="programme_type_name" list="programme_types" value="{{ $programme->programme_type->name }}">
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
    <select id="facilitator_id" name="facilitator_id" >
        <option value="" disabled>Choose Facilitator</option>
         @foreach($facilitators as $facilitator)
         @if( $facilitator->id == $programme->facilitator_id)
           <option value="{{ $facilitator->id }}" selected>{{ $facilitator->name }}</option>
           <?php continue; ?>
         @endif
           <option value="{{ $facilitator->id }}" >{{ $facilitator->name }}</option>
         @endforeach
    </select>
    <label>Select Facilitator</label>
  </div>
</div>


<div class="row">
  <div class="input-field col s12">
      <select id="year" name="year" value="{{ $programme->year }}">
      <option value="{{ date('Y') }}" >{{ date('Y') }}</option>
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
    <input type="text" id="recess_start_date" name="recess_start_date" value="{{ date('d-m-Y', strtotime($programme->recess_start_date)) }}">
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m12 l12">
    <label for="end_date">Recess End Date</label>
    <input type="text" name="recess_end_date" id="recess_end_date" value="{{ date('d-m-Y', strtotime($programme->recess_end_date)) }}">
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <select id="semester" name="semester" value="{{ $programme->semester }}">
        <option value="1" >1</option>
        <option value="2" >2</option>
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
