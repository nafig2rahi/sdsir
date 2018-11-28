@extends('backend.layouts.layout')

@section('allpost')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Description List</li>
</ol>

<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
	Data Table</div>
	
	<div class="card-body">
		 	<div class="table-responsive">
	<?php
                $message = Session::get('message');
                if($message){
                  echo $message;
                  Session::put('message',null);
                } 
              ?>
		 		
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
					</tr>
				</thead>

  				<tbody>
  					
  					@foreach($all_post_info as $v_post)
					<tr>
						<td class="center">{{$v_post->id}}</td>
						<td class="center">{{$v_post->name}}</td>
						<td class="center">{{$v_post->address}}</td>
						<td>
				<a href="{{URL::to('/update/'.$v_post->id)}}" style="background-color: green;color: white;border-radius: 2px">Update</a>			
				<a href="{{URL::to('/delete/'.$v_post->id)}}" style="background-color: red;color: white;border-radius: 2px"> Delete</a>			
						</td> 
					
					</tr>
					@endforeach
					
				</tbody>

				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
					</tr>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>

@endsection