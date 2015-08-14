@extends('layout.master')

@section('stylesheet')
<link rel="stylesheet" type="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" href="">
@stop

@section('contents')
<div class="col-md-3">
	
</div>	
<div class="col-md-9">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">List of assets</h3>
		</div>
		<div class="panel-body">
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
							<a href="/asset/{{ $asset->asset_id }}">
								<button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-search"></i> View</button>
							</a>
							@if(auth()->user()->isAdmin())
							<a href="/asset/{{ $asset->asset_id }}">
								<button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i> Update</button>
			       			</a>
			       			@endif
			       		</td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#assetTable').DataTable();
});
</script>
@stop