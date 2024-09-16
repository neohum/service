<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;

class RentController extends Controller
{
    //
    public function index()
    {
        return view('rents.index');
    }

    public function create()
    {
        return view('rents.create');
    }

    public function store(Request $request)
    {
        $hex = 'l' . bin2hex(random_bytes(20));
        $request->validate([
            'rent_service_name' => 'required',
        ]);
        try{
            $rent = Rent::where('hex_address', $hex)->firstOrFail();

        } catch (\Exception $e) {
            $rent = null;
        }
        Rent::create([
            'rent_service_name' => $request->rent_service_name,
            'hex_address' => $hex,
        ]);


        return redirect()->route('lists.show', $hex)
            ->with('success', 'IT 기기 대여 서비스 신청이 완료되었습니다.');
    }

    public function show($hex)
    {
        $rent = Rent::where('hex_address', $hex)->firstOrFail();
        return view('rents.show')->with('rent', $rent);
    }


}
