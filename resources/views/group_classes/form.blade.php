{{ csrf_field() }}
<div class="row">
  <div class="input-field col s12">
    <select name="course_id" value="{{ old('course_id') }}">
      <option value="" disabled selected>Choose Course</option>
      @foreach($courses as $course)
        <option value="{{ $course->id }}">{{ $course->title }}</option>
      @endforeach
    </select>
    <label>Select Course</label>

  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <select name="lecturer_id" value="{{ old('lecturer_id') }}">
      <option value="" disabled selected>Choose lecturer</option>
      @foreach($lecturers as $lecturer)
        <option value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
      @endforeach
    </select>
    <label>Select lecturer</label>

  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <label>Hours</label>
    <input type="number" name="hours">
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <label>Group Name</label>
    <input type="text" name="group_name">
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <label>Group Number</label>
    <input type="number" name="group_number">
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <label for="number_of_students">Number Of Students</label>
    <input  id="number_of_students" type="number" name="number_of_students" value="{{ old('number_of_students') }}">
  </div>
</div>

<div class="row">
  <div class="input-field col s12 m12 l12">
    <label for="start_date">Start Date</label>
    <input type="text" id="date-start" class="form-control" name="start_date" >
  </div>
</div>
<div class="row">
  <div class="input-field col s12 m12 l12">
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
