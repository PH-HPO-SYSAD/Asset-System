@extends('layout.master')
{{-- Navigation --}}
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Asset <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Add Asset</a></li>
            <li><a href="#">Update Asset</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Asset">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
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
      <a href="#" class="btn btn-primary">Learn More</a>
    </div>
  </div>


  <!-- Query Asset here -->
  <div class="newasset">  
      <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Asset</th>
      <th>Inventory Tag</th>
      <th>Status</th>
      <th>Assigned Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mouse Genius</td>
      <td>MOUSE-GENIUS-0052</td>
      <td>Working</td>
      <td>Computer-010</td>
    </tr>
    <tr>
      <td>2</td>
      <td>AOC</td>
      <td>COMP-AOC-0013</td>
      <td>Working</td>
      <td>Vacant</td>
    </tr>
    <tr class="info">
      <td>3</td>
      <td>Genius Keyboard</td>
      <td>KYBRD-GENIUS-0025</td>
      <td>Defective</td>
      <td>Pull-Out for repair</td>
    </tr>
    <tr class="success">
      <td>4</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="danger">
      <td>5</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="warning">
      <td>6</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="active">
      <td>7</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table> 
  </div>
@endsection
