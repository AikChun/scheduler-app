@extends('layouts.app')

@section('content')
<div class="row">
 <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
</div>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red tooltipped" data-position="left" data-delay="50" data-tooltip="Add" href="/welcome">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Insert Chart"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Format Quote"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Publish" ><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Attach File" ><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
@endsection
