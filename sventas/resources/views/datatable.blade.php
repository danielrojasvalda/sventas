<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Implementing datatables tutorial using yajra package</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
  <table id="users" class="table table-hover table-condensed" style="width:100%">
    <thead>
        <tr>
				<th>ID</th>            
            <th>Fecha</th>
            <th>Sucursal</th>
            <th>Movimiento</th>
            <th>Referencia</th>
          	<th>Producto</th>
          	<th>Cantidad</th>
          	<th>Series</th>
        </tr>
    </thead>
  </table>
</div>

<script type="text/javascript">
/*
$(document).ready(function() {
    oTable = $('#users').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('datatable.getposts') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'KFecha', name: 'KFecha'},
            {data: 'KSucursal', name: 'sucursal.NroSucursal'},
            {data: 'KMovimiento', name: 'KMovimiento'},
            {data: 'KReferencia', name: 'KReferencia'},
            {data: 'KProducto', name: 'KProducto'},
            {data: 'KCantidad', name: 'KCantidad'},
            {data: 'KSerie', name: 'KSerie'}
        ]
    });
});
*/
    
    //$('#posts-table').DataTable({
    	$('#users').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('datatable.getposts') }}",
        //ajax: 'https://datatables.yajrabox.com/eloquent/joins-data',
        columns: [
            {data: 'id', name: 'kardex.id'},
            {data: 'KFecha', name: 'kardex.KFecha'},
            {data: 'KSucursal', name: 'kardex.KSucursal'},
            {data: 'KMovimiento', name: 'kardex.KMovimiento'},
            {data: 'KReferencia', name: 'kardex.KReferencia'},
            {data: 'KProducto', name: 'kardex.KProducto'},
            {data: 'KCantidad', name: 'kardex.KCantidad'},
            {data: 'KSerie', name: 'kardex.KSerie'}
        ]
    });

</script>
</body>
</html>