{{ csrf_field() }}
<div class="row">
  <div class="input-field col s12">
    <select name="programme_id" value="{{ old('programme_id') }}">
      <option value="" disabled selected>Choose Programme</option>
      @foreach($programmeNames as $programme)
        <option value="{{ $programme->id }}">{{ $programme->name }}</option>
      @endforeach
    </select>
    <label>Select Programme</label>

  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" list="courseTitles">
    <datalist id="courseTitles">
      @foreach($courseTitles as $courseTitle)
        <option value="{{ $courseTitle->title }}"/>
      @endforeach
    </datalist>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label for="code">Code</label>
    <input id="course_code" type="text" name="code" value="{{ old('code') }}" list="courseCodes">
    <datalist id="courseCodes">
      @foreach($courseCodes as $courseCode)
        <option value="{{ $courseCode->code }}"/>
      @endforeach
    </datalist>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label for="number_of_students">Number Of Students</label>
    <input  id="number_of_students" type="number" name="number_of_students" value="{{ old('number_of_students') }}">
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <input  id="numberOfGroups" type="number" name="number_of_groups" value="{{ old('number_of_groups') }}">
    <label for="number_of_groups">Number Of Groups</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m6 l6">
    <label for="start_date">Start Date</label>
    <input type="text" name="start_date" id="date-start" >
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m6 l6">
    <label for="end_date">End Date</label>
    <input type="text" name="end_date" id="date-end" >
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
      <i class="mdi-content-send right"></i>
    </button>
  </div>
</div>
