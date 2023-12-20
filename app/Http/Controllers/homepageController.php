<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\home;

class homepageController extends Controller
{
    public function index()
    {
       
        $products = DB::table('tour')->select('*');
        $products = $products->get();

        return view('index', compact('products'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = home::query()
        ->where('tourname','LIKE',"%{$search}%")
        ->get();
        return view('index',compact('products'));
    }
}
