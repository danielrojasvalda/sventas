@extends('layouts.app')
@section('main-content')

<center>
<p class="bg-primary"><h2>STOCK DE PRODUCTOS <img src="../public/img/bincard-logo.png" alt="" width="80"></h2></p>
</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js">
</script>
<!--
<?php var_dump($var1); ?>
-->
	<!-- <?php echo Auth::user()->IdSucursal; ?> -->
	<table id="example" class="table table-hover">
	<thead>		
		<th style="text-align:center">SUCURSAL</th>
		<th style="text-align:center">Producto</th>
		<th style="text-align:center">Caracteristicas</th>
		<th style="text-align:center">Precio (Bs.)</th>
		<th style="text-align:center"><u>STOCK</u></th>
		<th style="text-align:center">Stock Minimo</th>
		<th style="text-align:center">Stock Ideal</th>
	</thead>
									
	@foreach($var1 as $kardex)
	<tbody>
		<td>{{ $kardex->Sucursal }}</td>		
		<td>{{ $kardex->Producto }}</td>
		<td>{{ $kardex->Descripcion }}</td>
		<td>{{ $kardex->Precio }}</td>	
		<td>{{ $kardex->Stock }}</td>
		<td>{{ $kardex->StockMinimo }}</td>
		<td>{{ $kardex->StockIdeal }}</td>		
	</tbody>
	@endforeach
<tfoot>	
	</table>
	<table id="showgraph" class="table table-hover">
	<div class="chart-container" style="position: relative; height:20vh; width:40vw">
	<canvas id="productos" width="400" height="400"></canvas>
	</div>	
	</table>	
</tfoot>
<script>
var ctx = document.getElementById("productos");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["KUAA2014", "TINKULTE", "HEGA3G", "SIWI1", "KUAA2016", "SIWI2"],
        datasets: [{
            label: '# en Stock',
//            data: [120, 190, 30, 50, 20, 30],
  				data: [<?php echo $arreglo; ?> ],          
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
@stop

