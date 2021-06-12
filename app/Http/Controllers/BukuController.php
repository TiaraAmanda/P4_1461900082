<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
	public function index()
	{
		$buku = Buku::all();
		return view('bukuekspor',['bukuekspor'=>$buku]);
	}

	public function export_excel()
	{
		return Excel::download(new BukuExport, 'buku.xlsx');
	}
}
