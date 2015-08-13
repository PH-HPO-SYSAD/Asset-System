@extends('layout.master')

@section('stylesheet')
<link rel="stylesheet" type="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" href="">
@stop

@section('contents')
	
<table class="table" id="assetTable">
    <thead>
        <tr>
            <th>Tag Number</th>
            <th>Description</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($assets as $asset)
        <tr>
			<td>{{ $asset->tag_number }}</td> 
			<td>{{ $asset->description }}</td> 
			<td>{{ $asset->category->name }}</td> 
			<td>{{ $asset->brand->name }}</td> 
			<td>{{ $asset->model }}</td> 
			<td>{{ $asset->status }}</td> 
			<td>
				<button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-search"></i> View</button>
				<button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i> Update</button>
       		</td>
        </tr>
        @endforeach
    </tbody>
</table>	
@stop

@section('script')
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#assetTable').DataTable();
});
</script>
@stop