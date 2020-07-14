<!DOCTYPE html>
<html>
<head>
	<title>data codvid19</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	
	
	<div class="container">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Provinsi</th>
		      <th scope="col">Positif</th>
		      <th scope="col">Sembuh</th>
		      <th scope="col">Meninggal</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@php
		  		$no=0;
		  	@endphp
		  	@foreach($data as $datacorona)
		  	@php
		  		$no++;
		  	@endphp
		    <tr>
		      <th scope="row">{{ $no }}</th>
		      <td>{{ $datacorona ['attributes']['Provinsi']}}</td>
		      <td>{{ $datacorona ['attributes']['Kasus_Posi']}}</td>
		      <td>{{ $datacorona ['attributes']['Kasus_Semb']}}</td>
		      <td>{{ $datacorona ['attributes']['Kasus_Meni']}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>

</body>
</html>