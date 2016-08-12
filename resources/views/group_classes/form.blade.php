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
    <label> Venue</label>
    <input type="text" name="venue" list="venueList">
    <datalist>
        @foreach($venues as $venue)
            <option value="{{ $venue->name }}">
        @endforeach
    </datalist>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <label>Total Hours</label>
    <input type="number" name="total_hours">
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
  <div class="input-field col s12">
    <select name="day" value="{{ old('day') }}">
      <option value="" disabled selected>Choose Day of the Week</option>
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
    </select>

  </div>
</div>

<div class="row">
  <div class="input-field col s12 m12 l12">
    <label for="start_time">Start Time</label>
   <input type="text" id="start_time" class="form-control" name="start_time" >
  </div>
</div>
<div class="row">
  <div class="input-field col s12 m12 l12">
    <label for="end_time">End Time</label>
    <input type="text" name="end_time" id="end_time" >
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
      <i class="mdi-content-send right"></i>
    </button>
  </div>
</div>
