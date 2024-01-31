<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class product_historiesController extends Controller
{
    public function getProductSummary()
    {
        $productSummary = 'product_histories'::getProductSummary();
        return response()->json($productSummary);
    }

    public function showProductHistoriesView()
    {
        return view('product-histories');
    }
}
