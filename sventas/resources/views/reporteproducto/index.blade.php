@extends('layouts.app')
@section('main-content')

<center>
<p class="bg-primary"><h2>STOCK DE PRODUCTOS <img src="../public/img/bincard-logo.png" alt="" width="80"></h2></p>
</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js">
</script>
<center>
<a href="{{ url('stockalmacen') }}" class="btn btn-lg btn-primary" role="button">[ Búsqueda Item ]</a>
<a href="{{ url('home') }}" class="btn btn-lg btn-primary" role="button">[ Menu Principal ]</a>
</center>

<?php var_dump($var1); ?>

	<!-- <?php echo Auth::user()->IdSucursal; ?> -->
	
<center>	
		<div style="position: relative; height:15vh; width:35vw">
			<canvas id="productos" width="150" height="100"></canvas>	
		</div>
</center>		
	
<script>
var ctx = document.getElementById("productos");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["TINKU", "HEKA", "KUAA 2014", "SIWI i5", "CARCASA BASE", "TARJETA MADRE", "PANTALLA LCD"],
        datasets: [{
            label: '# en Stock',
//            data: [120, 190, 30, 50, 20, 30],
  				data: [<?php echo "" . $arreglo ."," . $arreglo2; ?> ],          
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