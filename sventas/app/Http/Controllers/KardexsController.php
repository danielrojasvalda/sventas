<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KardexsDataTable;
use App\Http\Requests;

//use Datatables;
//use Yajra\Datatables\Datatables;

class KardexsController extends Controller
{
    //
	public function index(KardexsDataTable $dataTable)
	{
		return $dataTable->render('kardexs');
	}
}
