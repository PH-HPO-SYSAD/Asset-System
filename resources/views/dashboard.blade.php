@extends('layout.master')

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