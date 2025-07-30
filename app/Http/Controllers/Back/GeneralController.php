<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GeneralController extends Controller
{
    public function __construct(){}

    public function services(): AnonymousResourceCollection
    {
        $services = Service::query()->orderBy('sort', 'desc')->get();

        return ServiceResource::collection($services);
    }
}
