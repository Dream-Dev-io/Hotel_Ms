<?php

namespace App\Http\Controllers\Admin\pages;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function addFacility(Request $request,$roomid)
    {
        $room = Room::find($roomid);
        $facility = Facility::find($request->f_name);
        $room->facilities()->attach($facility);
        // return $request;

        return response()->json(['success'=>'Facility saved successfully.']);

    }


}
