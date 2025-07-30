<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ServiceResource;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GeneralController extends Controller
{
    protected string $lang;
    public function __construct(){}

    public function services(): AnonymousResourceCollection
    {
        return ServiceResource::collection(Service::query()->orderBy('sort')->get());
    }

    public function products(): AnonymousResourceCollection
    {
        return ProductResource::collection(Product::query()->orderBy('order_column')->get());
    }
}
