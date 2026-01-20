<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index()
    {
        return Greeting::latest()->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        $greeting = Greeting::create($validated);

        return response()->json($greeting, 201);
    }

    public function destroy($id)
    {
        $greeting = Greeting::findOrFail($id);
        $greeting->delete();

        return response()->json(['message' => 'Greeting deleted successfully']);
    }
}
