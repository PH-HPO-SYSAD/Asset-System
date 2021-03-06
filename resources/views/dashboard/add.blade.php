@extends('layout.master')
{{-- Navigation --}}
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">HPO Asset Inventory</a>
    </div>
  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="{{ action('DashController@dashboard') }}">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Asset <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class=""><a href="{{ action('DashController@AddAsset') }}">Add Asset</a></li>
            <li><a href="{{ action('DashController@SearchAsset') }}">Search and Update</a></li>
          </ul>
        </li>
        <li class="Logout">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Account Settings</a></li>
            <li><a href="{{ action('DashController@index') }}">Logout</a></li>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>

{{-- end navigation --}}
@section('contents')
  <div class="dash-jumbo">
    <div class="jumbotron" align="center">
      <h2>Adding new assets</h2>
      <p>To help yourself click learn more to know more.</p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#learn">Learn More</a>
    </div>
  </div>

  <form class="form-horizontal">
  <fieldset>
    <legend>Add new asset</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Brand</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Brand">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Color</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Asset Color">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Control Number</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Control Number">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Serial Number</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Serial Number">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Model</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Model Name">
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Category</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>Desktop</option>
          <option>Handheld Radio</option>
          <option>IP Camera</option>
          <option>Laptop</option>
          <option>Microphone</option>
          <option>Network Switch</option>
          <option>Network Router</option>
          <option>Printer</option>
          <option>Software</option>
          <option>Monitor</option>
          <option>Headset</option>
          <option>Keyboard</option>
          <option>Mouse</option>
          <option>Office Station</option> 
          <option>Projector</option>
          <option>Speakers</option>
          <option>Power Supply</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Additional Information</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">Please Indicate the specification of the asset.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Status</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Working
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Defective
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Asset History</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>Brand New</option>
          <option>2nd Use</option>
        </select>
        <br>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Assigned Location</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Deployment location">
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Warranty Status</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>Under Warranty</option>
          <option>No Warranty</option>
        </select>
        <br>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <a href="{{ action('DashController@dashboard') }}" class="btn btn-info">Home</a>
        <a href="{{ action('DashController@dashboard') }}" class="btn btn-primary">Submit</a>
        <!-- <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button> -->
      </div>
    </div>
  </fieldset>
</form>


<div class="modal fade" id="learn">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Adding new asset</h4>
      </div>
      <div class="modal-body">
        <p>This is the contents of additional informations about adding new assets</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
  <!-- Query Asset here -->

@endsection
