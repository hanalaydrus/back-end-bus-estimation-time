<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {
    	return Track::get();
    }

    public function show($id)
    {
    	$bus = Bus::where('track_id', $id)->get();

    	foreach ($bus as $i => $b) {
    		$bus[$i]['position'] = $b->positions()->latest()->select('lat', 'long')->first();
    	}

    	return $bus;
    }
}
