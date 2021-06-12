<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class Buku extends Model
{
    protected $table = "buku";

    protected $fillable = ['id','judul','tahun_terbit'];
}