<div class="row">
  <div class="input-field col s12">
      <select name="programme_id" value="{{ $course->programme_id }}">
      <option value="" disabled >Choose Programme</option>
      @foreach($programmes as $programme)
          <option value="{{ $programme->id }}">{{ $programme->programme_type->name . ' (' .  $programme->year . '/S' . $programme->semester . ')'}}</option>
      @endforeach
    </select>
    <label>Select Programme</label>

  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" list="courseTitles" value="{{ $course->title }}">
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
    <input id="course_code" type="text" name="code" value="{{ $course->code }}" list="courseCodes">
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
    <input  id="number_of_students" type="number" name="number_of_students" value="{{ $course->number_of_students }}">
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <input  id="numberOfGroups" type="number" name="number_of_groups" value="{{ $course->number_of_groups }}">
    <label for="number_of_groups">Number Of Groups</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m6 l6">
    <label for="start_date">Start Date</label>
    <input type="text" name="start_date" id="date-start" value=" {{ date('d-m-Y', strtotime($course->start_date)) }}">
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m6 l6">
    <label for="end_date">End Date</label>
    <input type="text" name="end_date" id="date-end" value="{{ date('d-m-Y', strtotime($course->end_date)) }}">
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
      <i class="mdi-content-send right"></i>
    </button>
  </div>
</div>
