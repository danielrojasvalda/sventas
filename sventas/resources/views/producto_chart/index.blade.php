<html>
<head>
<title>GRAPH CHAR - VENTAS - QUIPUS</title>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
<h1>grap char - ventas - quipus</h1>
<h2>Sucursal : LPZ-1</h2>
<div id="ventas_reporte" style="height: 250px; "></div>

<script>
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'ventas_reporte',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { mes: '1', value: 40.50 },
    { mes: '2', value: 20.10 },
    { mes: '3', value: 10.30 },
    { mes: '4', value: 9 },
    { mes: '5', value: 1 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'mes',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Venta']
});
</script>
</body>
</html>
