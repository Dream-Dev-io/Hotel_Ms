<?php

namespace App\Http\Controllers\Admin\pages;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addService(Request $request,$roomid)
    {
        $room = Room::find($roomid);
        $service = Service::find($request->s_name);
        $room->services()->attach($service);
        // return $request;

        return response()->json(['success'=>'Service saved successfully.']);

    }
}
