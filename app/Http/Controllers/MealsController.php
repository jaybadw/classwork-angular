<?php
namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Http\Controllers\RestaurantController;
use App\Models\Flavour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MealsController extends Controller
{
   
    public function index($restaurantId): View
    {
        $meals = Meal::whereHas('menu.restaurant', function ($query) use ($restaurantId) {
            $query->where('id', $restaurantId);
        })->get();

        return view('restaurant.show', ['meals' => $meals]);
    }


    public function create($menuId)
    {
        $menu = Menu::find($menuId);
        if (!$menu) {
            // Handle the case when the menu is not found
            abort(404);
        }

        return view('meal.create', ['menu' => $menu]);
    }

    public function store(Request $request, $menuId)
    {
        // Validate the request data
        $request->validate([
            'meal_name' => 'required',
            'meal_image' => 'required',
            'price' => 'required',
            'description' => 'nullable',
            'flavour_id' => 'required|exists:flavours,id', // Validate the existence of the selected flavor
            // Add more validation rules as per your requirements
        ]);

        // Create a new meal
        $meal = new Meal();
        $meal->menu_id = $menuId;
        $meal->name = $request->input('name');
        $meal->image = $request->input('image');
        $meal->price = $request->input('price');
        $meal->description = $request->input('description');
        $meal->flavour_id = $request->input('flavour_id'); // Assign the selected flavor ID

        // Save the meal to the database
        $meal->save();

        // Redirect to the menu show page
        return redirect()->route('menu.show', ['id' => $meal->menu->restaurant_id, 'menuid' => $menuId]);
    }

    public function edit(string $id)
    {
        $meal = Meal::find($id);
        return view('meal.edit')->with('meal', $meal);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $meal = Meal::find($id);
        $input = $request->all();
        $meal->update($input);
        return redirect('menu')->with('flash_message', 'Meal updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Meal::destroy($id);
        return redirect('menu')->with('flash_message', 'Meal deleted!');
    }
}
