@extends('layouts.app')
@section('main-content')

<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


<center>
	<p class="bg-primary"><h2>SUCURSALES<img src="../public/img/logo-sucursal.png" alt="" width="80"></h2></p>
	</center>
	@include('partials.messages')	
	<table id="example" class="table table-hover">
	<thead>
		<th style="text-align:center">Nro. de Sucursal</th>
		<th style="text-align:center">Departamento Sucursal</th>
		<th style="text-align:center">Ciudad Sucursal</th>
		<th style="text-align:center">Direccion Sucursal</th>
		<th style="text-align:center">Telefono Sucursal</th>
	</thead>
	<tfoot>
		<tr>
			<th style="text-align:center">Nro. de Sucursal</th>			
			<th style="text-align:center">Departamento Sucursal</th>
			<th style="text-align:center">Ciudad Sucursal</th>
			<th style="text-align:center">Direccion Sucursal</th>
			<th style="text-align:center">Telefono Sucursal</th>
		</tr>
	</tfoot>	
	@foreach($sucursales as $sucursal)
	<tbody>
		<td>{{ $sucursal->NroSucursal }}</td>		
		<td>{{ $sucursal->DptoSucursal }}</td>
		<td>{{ $sucursal->CiudadSucursal }}</td>
		<td>{{ $sucursal->DirSucursal }}</td>
		<td>{{ $sucursal->TelSucursal }}</td>
		<td><a href="{{ url('sucursal/'. $sucursal->id . '/edit') }}"><i class='fa fa-pencil'></i><span> EDITAR</span></a></td>
	</tbody>
	@endforeach
	</table>
	<center>	
	<div class="btn-group">	
		<a href="sucursal/create" class="btn btn-lg btn-primary" role="button">Añadir Nueva Sucursal</a>
		<a href="home" class="btn btn-lg btn-primary" role="button">Volver al Menu</a>
	</div>
	</center>
@stop


