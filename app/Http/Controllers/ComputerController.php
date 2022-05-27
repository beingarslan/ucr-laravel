<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComputerController extends Controller
{
    public function computer(Request $request){

        $computers = DB::table('computers')->get();

        $brands = DB::table('brand')->get();

        $data = [
            'computers' => $computers,
            'brands' => $brands
        ];

        return view('computer', $data);
    }

    public function store(Request $request){

        // upload image
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $data = [
            'model' => $request->input('model'),
            'image' => 'images/'. $imageName,
            'operating_system' => $request->input('operating_system'),
            'display_size' => $request->input('display_size'),
            'ram' => $request->input('ram'),
            'usb_ports' => $request->input('usb_ports'),
            'hdmi_ports' => $request->input('hdmi_ports'),
            'rental_price' => $request->input('rental_price'),
        ];

        DB::table('computers')->insert($data);

        return redirect('/computer');
    }
   
    public function update(Request $request){
        $data = [
            'model' => $request->input('model'),
            'operating_system' => $request->input('operating_system'),
            'display_size' => $request->input('display_size'),
            'ram' => $request->input('ram'),
            'usb_ports' => $request->input('usb_ports'),
            'hdmi_ports' => $request->input('hdmi_ports'),
            'rental_price' => $request->input('rental_price'),
        ];

        DB::table('computers')->where('id', $request->input('computer_id'))->update($data);

        return redirect('/computer');
    }

    public function delete(Request $request){
        DB::table('computers')->where('id', $request->input('computer_id'))->delete();

        return redirect('/computer');
    }
}
