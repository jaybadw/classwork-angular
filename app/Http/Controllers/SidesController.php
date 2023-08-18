<?php

    namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Sides;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SideController extends Controller
{
    public function create($mealId): View
    {
        $meal = Meal::find($mealId);
        if (!$meal) {
            abort(404);
        }

        return view('side.create', ['meal' => $meal]);
    }

    public function store(Request $request, $mealId): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            // Add more validation rules as per your requirements
        ]);

        // Create a new side
        $side = new Sides();
        $side->meal_id = $mealId; // Assign the mealId directly
        $side->name = $request->input('name');
        $side->type = $request->input('type');
        // Set other side properties as needed

        // Save the side to the database
        $side->save();

        // Redirect back to the meal show page
        return redirect()->route('meal.show', ['id' => $mealId]);
    }
}


