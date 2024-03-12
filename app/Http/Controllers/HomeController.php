<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function __invoke()
    {
        $columns = Schema::getColumnListing('trains');
        $excludeColumns = ['id', 'created_at', 'updated_at'];
        $trains = Train::all();
        return view('home',  compact('trains', 'columns', 'excludeColumns'));
    }
}
