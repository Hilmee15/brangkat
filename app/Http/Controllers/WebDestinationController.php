<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Destination::all();
        return view('admin.destination.index', compact('data'));
    }

    public function viewDestinations()
    {
        return view('admin.destination.index');
    }

    public function viewCreate()
    {
        $city = City::all();
        return view('admin.destination.create', compact('city'));
    }

    public function viewEdit($id)
    {
        $destination = Destination::find($id);
        $city = City::all();
        return view('admin.destination.edit', compact('city', 'destination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $request->validate(
        //     [
        //         'name' => 'required|max:100',
        //         'description' => 'required',
        //         'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        //     ]
        // );
        

        if ($request->hasFile('img_destinasi')) {
            // die("Sudah masukkan img_destinasinya");
            $file = $request->file('img_destinasi');
            $filename = date('YmdHi') . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/uploads', $file, $filename);
            $data['image'] = $filename;
        }

        unset($data['img_destinasi']);


        // die("belum masukkan imagenya");

        Destination::create($data);
        return redirect()->route('destination.view');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $destination = Destination::findOrFail($id);

        if ($request->hasFile('image')) {
            $path = "uploads/" . $destination->image;
            // if (File::exists($path)) {
            //     File::delete($path);
            // }
            $file = $request->file('image');
            $filename = date('YmdHi') . '.' . $file->getClientOriginalExtension();
            $file->move('uploads', $filename);
            $input['image'] = $filename;
        }

        $destination->update($input);
        return redirect()->route('destination.view');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $path = "uploads/" . $destination->image;
        // if (File::exists($path)) {
        //     File::delete($path);
        // }
        $destination->delete();
        return redirect()->route('destination.view')->with('success', 'Berhasil menghapus Destinasi');
    }
}
