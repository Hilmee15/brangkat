<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class WebCityController extends Controller
{
    public function index()
    {
        $data = City::all();
        return view('admin.city.index', compact('data'));
    }

    public function viewCategories()
    {
        return view('admin.city.index');
    }

    public function viewCreate()
    {
        return view('admin.city.create');
    }

    public function viewEdit($id)
    {
        $city = City::find($id);
        return view('admin.city.edit', compact('city'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate(
            [
                'name' => 'required'
            ]
        );

        City::create($data);
        return redirect()->route('city.view');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $city = City::findOrFail($id);

        $city->update($input);
        return redirect()->route('city.view');
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->route('city.view')->with('success', 'Berhasil menghapus Kota');
    }
}
