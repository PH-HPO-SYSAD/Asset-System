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
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Asset <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ action('DashController@AddAsset') }}">Add Asset</a></li>
            <li><a href="{{ action('DashController@SearchAsset') }}">Search</a></li>
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
      <h2>Welcome (USER) to HPO Asset Inventory</h2>
      <p>To help yourself click learn more to know more.</p>
     <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#learn">Learn More</a>
    </div>
  </div>

  
  <!-- Query Asset here -->
  <h3>Defective Assets</h3>
  <div class="Deffective">  
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Asset</th>
      <th>Inventory Tag</th>
      <th>Status</th>
      <th>Warranty Status</th>
    </tr>
  </thead>
  <tbody>
    <tr class="danger">
      <td>1</td>
      <td>Mouse Genius</td>
      <td>MOUSE-GENIUS-0052</td>
      <td>Defective</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="danger">
      <td>2</td>
      <td>AOC</td>
      <td>COMP-AOC-0013</td>
      <td>Defective</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="danger">
      <td>3</td>
      <td>Genius Keyboard</td>
      <td>KYBRD-GENIUS-0025</td>
      <td>Defective</td>
      <td>No Warranty</td>
    </tr>
    <tr class="danger">
      <td>4</td>
      <td>Keyboard Genius</td>
      <td>MOUSE-GENIUS-0153</td>
      <td>Defective</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="danger">
      <td>5</td>
      <td>Samsung</td>
      <td>COMP-SAMSUNG-0055</td>
      <td>Defective</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="danger">
      <td>6</td>
      <td>View Sonic</td>
      <td>COMP-VIEWSONIC-0442</td>
      <td>Defective</td>
      <td>No Warranty</td>
    </tr>
    <tr class="danger">
      <td>7</td>
      <td>Acer</td>
      <td>COMP-ACER-0022</td>
      <td>Defective</td>
      <td>Under Warranty</td>
    </tr>
  </tbody>
</table> 
  </div>

  <h3>Pulled-out Assets</h3>
  <div class="pullout">  
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Asset</th>
      <th>Inventory Tag</th>
      <th>Status</th>
      <th>Warranty Status</th>
      <th>Pulled out for</th>
    </tr>
  </thead>
  <tbody>
    <tr class="warning">
      <td>1</td>
      <td>Mouse Genius</td>
      <td>MOUSE-GENIUS-0052</td>
      <td>Defective</td>
      <td>Under Warranty</td>
      <td>Repair</td>
    </tr>
    <tr class="warning">
      <td>2</td>
      <td>AOC</td>
      <td>COMP-AOC-0013</td>
      <td>Defective</td>
      <td>Under Warranty</td>
      <td>Repair</td>
    </tr>
    <tr class="warning">
      <td>3</td>
      <td>Genius Keyboard</td>
      <td>KYBRD-GENIUS-0025</td>
      <td>Defective</td>
      <td>No Warranty</td>
      <td>Repair</td>
    </tr>
    <tr class="warning">
      <td>4</td>
      <td>Keyboard Genius</td>
      <td>MOUSE-GENIUS-0153</td>
      <td>Defective</td>
      <td>Under Warranty</td>
      <td>Repair</td>
    </tr>
    <tr class="warning">
      <td>5</td>
      <td>Samsung</td>
      <td>COMP-SAMSUNG-0055</td>
      <td>Defective</td>
      <td>Under Warranty</td>
      <td>Repair</td>
    </tr>
    <tr class="warning">
      <td>6</td>
      <td>View Sonic</td>
      <td>COMP-VIEWSONIC-0442</td>
      <td>Defective</td>
      <td>No Warranty</td>
      <td>Repair</td>
    </tr>
    <tr class="warning">
      <td>7</td>
      <td>Acer</td>
      <td>COMP-ACER-0022</td>
      <td>Defective</td>
      <td>Under Warranty</td>
      <td>Repair</td>
    </tr>
  </tbody>
</table> 
  </div>

  <h3>Vacant Assets</h3>
  <div class="Deffective">  
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Asset</th>
      <th>Inventory Tag</th>
      <th>Status</th>
      <th>Warranty Status</th>
    </tr>
  </thead>
  <tbody>
    <tr class="info">
      <td>1</td>
      <td>Mouse Genius</td>
      <td>MOUSE-GENIUS-0052</td>
      <td>Working</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="info">
      <td>2</td>
      <td>AOC</td>
      <td>COMP-AOC-0013</td>
      <td>Working</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="info">
      <td>3</td>
      <td>Genius Keyboard</td>
      <td>KYBRD-GENIUS-0025</td>
      <td>Working</td>
      <td>No Warranty</td>
    </tr>
    <tr class="info">
      <td>4</td>
      <td>Keyboard Genius</td>
      <td>MOUSE-GENIUS-0153</td>
      <td>Working</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="info">
      <td>5</td>
      <td>Samsung</td>
      <td>COMP-SAMSUNG-0055</td>
      <td>Working</td>
      <td>Under Warranty</td>
    </tr>
    <tr class="info">
      <td>6</td>
      <td>View Sonic</td>
      <td>COMP-VIEWSONIC-0442</td>
      <td>Working</td>
      <td>No Warranty</td>
    </tr>
    <tr class="info">
      <td>7</td>
      <td>Acer</td>
      <td>COMP-ACER-0022</td>
      <td>Working</td>
      <td>Under Warranty</td>
    </tr>
  </tbody>
</table> 
  </div>


<div class="modal fade" id="learn">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Dashboard Contents</h4>
      </div>
      <div class="modal-body">
        <p>This is the contents of additional information about Dashboard</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
