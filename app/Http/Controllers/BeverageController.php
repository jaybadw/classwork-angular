<?php


    namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Models\Drink;
    use App\Models\Meal;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\View\View;
    
    class DrinkController extends Controller
    {
        public function create($mealId): View
        {
            $meal = Meal::find($mealId);
            if (!$meal) {
                abort(404);
            }
    
            return view('drink.create', ['meal' => $meal]);
        }
    
        public function store(Request $request, $mealId): RedirectResponse
        {
            // Validate the request data
            $request->validate([
                'name' => 'required',
                'size' => 'required',
                // Add more validation rules as per your requirements
            ]);
    
            // Create a new drink
            $drink = new Beverage();
            $drink->meal_id = $mealId; // Assign the mealId directly
            $drink->name = $request->input('name');
            $drink->size = $request->input('size');
            // Set other drink properties as needed
    
            // Save the drink to the database
            $drink->save();
    
            // Redirect back to the meal show page
            return redirect()->route('meal.show', ['id' => $mealId]);
        }
    }
      

