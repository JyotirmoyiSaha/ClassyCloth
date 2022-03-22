@extends('admin.master')
@section('content')
<style>
	body{
	 
	   background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
   
	}
	 #customers {
	   font-family: Arial, Helvetica, sans-serif;
	   border-collapse: collapse;
	   width: 100%;
	 }
	 /* .heading h2{
	   text-align: center;
	 } */
	 #customers td, #customers th {
	   border: 1px solid #ddd;
	   padding: 8px;
	 }
	 
	 #customers tr:nth-child(even){background-color: #ccccff;}
	 
	 #customers tr:hover {background-color: #ddd;}
	 
	
	 #customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #001313;
		color: white;
	  }
	 </style>

     <div class="heading">
		<h2>Users List</h2>
	  </div>
	  
	  <br>
	  <table id="customers">
		<tr>
		  <th>ID</th>
		  <th>Image</th>
		  <th>Name</th>
		  <th>Email</th>
		  <th>Action</th>
	  
		</tr>
	
			@foreach ($users as $key=>$user)   
     
			<tr>
			  <th scope="row">{{$key+1}}</th>
				<td>{{$user->name}}</td>
				<td>{{$user->details}}</td>
				<td>{{$category->parent_id}}</td>
				<td>{{$category->image}}</td>
				<td>#</td>
				<td><a href="{{route('category.edit',$category->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
					<a href="{{route('category.delete',$category->id)}}"><i class="fa-solid fa-trash"></i></a>
				</td>
				
			  </tr>
			  @endforeach
			
			

		
	
	  </table>

	  <br>
	  <a href="{{route('add.user')}}" class="btn btn-primary">Add New User</a>
@endsection