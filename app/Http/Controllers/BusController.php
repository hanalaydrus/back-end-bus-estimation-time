<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Http\Requests\CreateBusRequest;
use App\Http\Requests\UpdatePositionRequest;
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

    public function update(UpdatePositionRequest $request)
    {
    	$bus = Bus::findOrFail($request->get('bus_id'));
    	$bus->positions()->insert($request->all());
    	$bus->lat = $request->get('lat');
    	$bus->long = $request->get('long');
    	$bus->save();

    	return $bus;
    }
}
