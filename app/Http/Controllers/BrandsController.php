<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fanbox\BrandDistribution\Services\BrandsDistributionServices;

class BrandsController extends Controller
{
    public function index()
    {
    	$brand = new BrandsDistributionServices;
    	$products = $brand->products('en_US', 'xml', 'clothing');
    	dd($products);
    }
}
