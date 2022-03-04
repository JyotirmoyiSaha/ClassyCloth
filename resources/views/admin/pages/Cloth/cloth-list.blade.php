@extends('admin.master')
@section('content')
<!-- <html>
<head>
<link href="{{url('/admin/css/cloth.css')}}" rel="stylesheet">
</head>
<body>
<h2>Cloth List</h2>
<div class="container">
<a class="btn btn-dark" href="{{route('add.cloth')}}">Add Cloth</a>
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="id" class="filter__link">Id</a></div>
			<div class="header__item"><a id="cloth_image" class="filter__link filter__link--number">Image</a></div>
			<div class="header__item"><a id="cloth_name" class="filter__link filter__link--number">Name</a></div>
			<div class="header__item"><a id="cloth_code" class="filter__link filter__link--number">Code</a></div>
			<div class="header__item"><a id="cloth_type" class="filter__link filter__link--number">Type</a></div>
			<div class="header__item"><a id="cloth_color" class="filter__link filter__link--number">Color</a></div>
			<div class="header__item"><a id="cloth_size" class="filter__link filter__link--number">Size</a></div>
			<div class="header__item"><a id="details" class="filter__link filter__link--number">Details</a></div>
			<div class="header__item"><a id="cloth_price" class="filter__link filter__link--number">Price</a></div>
		</div>
		<div class="table-content">	
		@foreach($clothlists as $key=>$cloth)
		<div class="table-row">
			<td>{{$key+1}}</td>
			<td> 
            <img src="{{url('/uploads/'.$cloth->cloth_image)}}" width="100px" alt="Cloth Image">
            </td>
			<td>{{$cloth->cloth_name}}</td>
            <td>{{$cloth->cloth_code}}</td>
            <td>{{$cloth->cloth_type}}</td>
			<td>{{$cloth->cloth_color}}</td>
			<td>{{$cloth->cloth_size}}</td>
			<td>{{$cloth->details}}</td>
			<td>{{$cloth->cloth_price}}</td>

        </div>
		@endforeach
		</div>	

</div>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
  	<title>Table 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('/admin/css/style.css')}}">

	</head>
	<body>
	
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
	
					<h2 class="heading-section">Cloth List</h2>
					<a class="btn btn-primary" href="{{route('add.cloth')}}">Add Cloth</a>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th>#</th>
						      <th>Image</th>
						      <th>Name</th>
						      <th>Code</th>
							  <th>Type</th>
							  <th>Color</th>
							  <th>Size</th>
						      <th>Price</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
							@foreach($clothlists as $key=>$cloth)
							<td>{{$key+1}}</td>
			<td> 
            <img src="{{url('/uploads/'.$cloth->cloth_image)}}" width="100px" alt="Cloth Image">
            </td>
			<td>{{$cloth->cloth_name}}</td>
            <td>{{$cloth->cloth_code}}</td>
            <td>{{$cloth->cloth_type}}</td>
			<td>{{$cloth->cloth_color}}</td>
			<td>{{$cloth->cloth_size}}</td>
			<td>{{$cloth->cloth_price}}</td>
			</tr>
			@endforeach


						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{url('/admin/js/jquery.min.js')}}"></script>
  <script src="{{url('/admin/js/popper.js')}}"></script>
  <script src="{{url('/admin/js/bootstrap.min.js')}}"></script>
  <script src="{{url('/admin/js/main.js')}}"></script>

	</body>
</html>


@endsection
