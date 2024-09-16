<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;
use App\Models\Rent;

class ListsController extends Controller
{


    public function show($hex)
    {
        $rent = Rent::where('hex_address', $hex)->firstOrFail();
        $lists = Lists::where('rent_id', $rent->id)->orderBy('id', 'desc')->take(10)->get();


        return view('lists.show')->with('rent', $rent)->with('lists', $lists);
    }

    public function store(Request $request)
    {



        $rent_id = Rent::where('hex_address', $request->hex_address)->firstOrFail();
        $request->validate([
            'grade' => 'required',
            'class' => 'required',
            'device_name' => 'required',
            'name' => 'required',
            'hex_address' => 'required',

        ]);
        Lists::create([
            'grade' => $request->grade,
            'class' => $request->class,
            'device_name' => $request->device_name,
            'name' => $request->name,
            'rent_id' => $rent_id->id,

        ]);
        return redirect()->route('lists.show', $request->hex_address)
            ->with('success', '기기 대여 신청이 완료되었습니다.')->with('hex_address', $request->hex_address)->with('rent_id', $request->rent_id);
    }

    public function update(Request $request)
    {
        $rent_id = Rent::where('hex_address', $request->hex_address)->firstOrFail();

        $lists = Lists::find($request->id);


        $lists->status = 1;
        $lists->save();

        return redirect()->route('lists.show', $request->hex_address)
            ->with('success', '기기 반납이 완료되었습니다.')->with('hex_address', $request->hex_address)->with('rent_id', $rent_id);
    }
}
