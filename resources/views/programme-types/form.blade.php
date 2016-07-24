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
    <label for="name">Name*</label>
    <input id="name" type="text" name="name" >
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
      <i class="mdi-content-send right"></i>
    </button>
  </div>
</div>
