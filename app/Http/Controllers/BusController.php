<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Http\Requests\CreateBusRequest;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function store(CreateBusRequest $request)
    {
    	$input = $request->only('track_id', 'type_id', 'nopol', 'driver_name');
    	$input['id'] = str_random(10);

    	$bus = Bus::create($input);
    	return $bus;
    }
}
