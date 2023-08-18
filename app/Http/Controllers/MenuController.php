<?php

namespace App\Http\Controllers;
use App\Models\Beverage;
use App\Models\Meal;
use App\Models\Menu;
use App\Models\Sides;
use App\Models\Beverages;
use App\Models\Restaurant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MenuController extends Controller
{
    public function index($restaurantId):View{
        $menu = Restaurant::find($restaurantId)->menus;
        // dd($menu);
        return view('restaurant.show',['menu'=>$menu]);
    }
    public function create($restaurantId)
    {
        $restaurant = Restaurant::find($restaurantId);
    
        return view('menu.create', ['restaurant' => $restaurant]);
    }
    

    public function store(Request $request, $restaurantId)
    {
        // Validate the request data
        $request->validate([
            'menu_name' => 'required',
            // Add more validation rules as per your requirements
        ]);
    
        // Create a new menu
        $menu = new Menu();
        $menu->restaurant_id = $restaurantId; // Assign the restaurantId directly
        $menu->menu_name = $request->input('menu_name');
        

        $restaurant=[];
    
        // Save the menu to the database
        $menu->save();
    
        // Redirect to the restaurant show page
        return redirect()->route('menu.index', $restaurantId);
    }
    public function show($id)
    {
        // Retrieve the menu from the database
        $menu = Menu::findOrFail($id);
    
        // Retrieve the associated restaurant
        $restaurant = $menu->restaurant;
    
        return view('restaurant.show', ['restaurant'=>$restaurant, 'menu'=>$menu]);
    }
   
    
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::find($id);
        return view('menu.edit')->with('menu', $menu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $menu = Menu::find($id);
        $input = $request->all();
        $menu->update($input);
        return redirect('menu')->with('flash_message', 'menu Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        
        Menu::destroy($id);
        return redirect('menu')->with('flash_message', 'menu deleted!');
    }

//     public function createBeverage($menuId, $mealId)
// {
//     $menu = Menu::find($menuId);
//     $meal = Meal::find($mealId);

//     return view('beverage.create', ['menu' => $menu, 'meal' => $meal]);
// }

// public function storeBeverage(Request $request, $menuId, $mealId)
// {
//     // Validate the request data
//     $request->validate([
//         'name' => 'required',
//         'size' => 'required',
//         // Add more validation rules as per your requirements
//     ]);

//     // Create a new beverage
//     $beverage = new Beverage();
//     $beverage->menu_id = $menuId;
//     $beverage->meal_id = $mealId;
//     $beverage->name = $request->input('name');
//     $beverage->size = $request->input('size');
//     // Add more fields as per your requirements

//     // Save the beverage to the database
//     $beverage->save();

//     // Redirect to the meal show page
//     return redirect()->route('meal.show', ['restaurant' => $restaurantId, 'menu' => $menuId, 'meal' => $mealId]);
// }

// public function createSide($menuId, $mealId)
// {
//     $menu = Menu::find($menuId);
//     $meal = Meal::find($mealId);

//     return view('side.create', ['menu' => $menu, 'meal' => $meal]);
// }

// public function storeSide(Request $request, $menuId, $mealId)
// {
//     // Validate the request data
//     $request->validate([
//         'name' => 'required',
//         'type' => 'required',
//         // Add more validation rules as per your requirements
//     ]);

//     // Create a new side
//     $side = new Side();
//     $side->menu_id = $menuId;
//     $side->meal_id = $mealId;
//     $side->save();

// }
}