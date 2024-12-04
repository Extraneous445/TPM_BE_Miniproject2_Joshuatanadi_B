<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class carController extends Controller
{
    public function create(){
        return view('InputData');
    }

    public function store(Request $request){
        $filepath=public_path('storage/images');
        $file = $request->file('image');
        $filename = $request->Merek_Mobil .'-'. $request->Jenis_Mobil . '.'.$file->getClientOriginalName();
        $file->move($filepath, $filename);



        car::create([
            // the id is auto increment
            'Merek_Mobil'=>$request->Merek_Mobil,
            'Jenis_Mobil'=>$request->Jenis_Mobil,
            'Tahun_Terbit'=>$request->Tahun_Terbit,
            'Harga'=>$request->Harga,
            'image'=>$filename,
        ]);

        return redirect('/home');
    }
    public function index(){
        $cars = Car::all();

        return view('welcome', compact('cars'));
    }

    public function show($id){
        $car = Car::findOrFail($id);

        return view('Showcar', compact('car'));
    }

    public function edit($id){
        $car = Car::findOrFail($id);
        return view('EditData', compact('car'));
    }

    public function update(Request $request, $id){
        Car::findOrFail($id)->update([
            'Merek_Mobil'=>$request->Merek_Mobil,
            'Jenis_Mobil'=>$request->Jenis_Mobil,
            'Tahun_Terbit'=>$request->Tahun_Terbit,
            'Harga'=>$request->Harga
        ]);
        return redirect('/home');
    }

    public function delete($id){
        car::destroy($id);

        return redirect('/home');
    }
}
