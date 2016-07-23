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
  </div>
</div>

@if(count($errors) > 0)
  <div class="input-field">
    @foreach($errors->all() as $error)
      <div class="error"> {{ $error }} </div>
    @endforeach
  </div>
@endif

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
