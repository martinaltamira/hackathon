<?php

namespace App\Services;

use App\Http\Resources\HackatonCollection;
use App\Http\Resources\HackatonResource;
use App\Models\Hackaton;

class HackatonService
{
    public function getHackaton($request) {
        $hackatons =  Hackaton::query()
        ->select('id','name', 'place', 'date');
        if ($request->place){
            $hackatons->where('place', 'like', $request->place);
        }
        if ($request->name){
            $hackatons->where('name', 'like', $request->name);
        }
        if ($request->date){
            $hackatons->where('date', '=', $request->date);
        }
        $hackatons->orderBy('date', 'asc')->with('developers');
        return HackatonResource::collection($hackatons->get());




    }
}
