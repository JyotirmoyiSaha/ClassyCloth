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
		<h2>Sellers List</h2>
	  </div>
	  <a href="{{route('role.create')}}" class="btn btn-primary">Add New Role</a>
	  <br>
	  <table id="customers">
		<tr>
		  <th>ID</th>
		  <th>Name</th>
		  <th>Status</th>
		  <th>Action</th>
	  
		</tr>
	  
		@foreach($role as $roles)
		<tr>
		  <th scope="row"></th>
		  <td>{{$roles->name}}</td>
		  <td>{{$roles->status}}</td>
		  <td><a href="{{route('edit.role',$roles->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
				<a href=""><i class="fa-solid fa-trash"></i></a>    
		  </td>
			
		  </tr>
		  @endforeach
	
	  </table>
	 
@endsection