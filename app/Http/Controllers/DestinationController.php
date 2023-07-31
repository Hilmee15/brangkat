<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Destination::all();
        return response()->json([
            'status' => true,
            'message' => 'Get all Destinations successfully',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = validator($data, [
            'name' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'city_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),
                'data' => null
            ]);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = now() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/'), $filename);
            $data['image'] = $filename;
        }
        // return dd($data);

        return response()->json([
            'status' => true,
            'message' => 'Create data successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destination = Destination::find($id);
        if (!$destination) {
            return response()->json([
                'status' => false,
                'message' => 'Destination not found',
                'data' => null
            ], 404);
        }
        return response()->json([
            'status' => true,
            'message' => 'Get Destination successfully',
            'data' => $destination
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $destination = Destination::find($id);
        if (!$destination) {
            return response()->json([
                'status' => false,
                'message' => 'Destination not found',
                'data' => null
            ], 404);
        }

        $destination->update($data);
        return response()->json([
            'status' => true,
            'message' => 'Update data successfully',
            'data' => $destination
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destination = Destination::find($id);
        if (!$destination) {
            return response()->json([
                'status' => false,
                'message' => 'Destination not found',
                'data' => null
            ], 404);
        }
        $destination->delete();
        return response()->json([
            'status' => true,
            'message' => 'Delete data successfully',
            'data' => $destination
        ]);
    }
}
