<?php

namespace App\Http\Controllers;

use App\Models\Hackaton;
use App\Services\HackatonService;
use Illuminate\Http\Request;

class HackatonController extends Controller
{
    //
    protected HackatonService $hackatonService;

    public function __construct(HackatonService $hackatonService)
    {
        $this->hackatonService = $hackatonService;
    }

    public function getHackatons(Request $request){
         return response()->json($this->hackatonService->getHackaton($request));
    }
}
