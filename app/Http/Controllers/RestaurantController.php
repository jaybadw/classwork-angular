<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Controllers\MenuController;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use illuminate\View\View;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    
    // public function isOpen($openingHours, $closingHours)
    // {
    //     $now = Carbon::now();
    //     $openingTime = Carbon::createFromFormat('H:i', preg_replace('/[^0-9:]/', '', strval($openingHours)));

    //     $closingTime = Carbon::createFromFormat('H:i', preg_replace('/[^0-9:]/', '', $closingHours));
        
    //     return $now->between($openingTime, $closingTime);
    // }
    
    public function index(): View
    {
        $restaurants = Restaurant::all();
        return view('restaurant.dashboard', ['restaurants' => $restaurants]);
    }
    public function create()
    {
        return view('restaurant.create');
    }

    public function store(Request $request)
    {


        try {
            $request->validate([
                'restaurant_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'restaurant_name' =>  'required|string|max:255',
                'phone' =>  'required|string|max:255',
                'address' =>  'required|string|max:255',
                'parish' =>  'required|string|max:255',
                'openingHours' =>  'required|string|max:255',
                'closingHours' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ],[
                "image.required"=>"image is required",
            ""          ]);
        } catch (Exception $e) {
            dd($e);
        }

        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->phone = $request-> phone;
        $restaurant->address = $request ->address;
        $restaurant->parish = $request ->parish;
        $restaurant->parish = $request ->rating;
        $restaurant->openingHours = $request ->openingHours;
        $restaurant->closingHours = $request -> closingHours;
        $restaurant->description = $request -> description;

        if ($request->hasFile('image')) {
            $image= $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $fileName);
            $restaurant->image = $fileName;
        }

        // $input = $request->all();
        // $ait = Restaurant::create($input);

        $restaurant->save();
        return redirect()->route('restaurant.index');


    }
   
  

    public function show($id)
    {
        // Retrieve the restaurant from the database
        $restaurant = Restaurant::findOrFail($id);
        $menus = $restaurant->menus;
    
        // Add the "is open" status to the restaurant object
        // $restaurant->isOpen = $this->isOpen($restaurant->openingHours, $restaurant->closingHours);    
        // Pass the restaurant to the view
        // dd($restaurant);
        return view('restaurant.show', ['restaurant' => $restaurant, 'menu' => $menus]);    }



    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurant.edit')->with('restaurant', $restaurant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $restaurant = Restaurant::find($id);
        $input = $request->all();
        $restaurant->update($input);
        return redirect('restaurant')->with('flash_message', 'restaurant Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {

        Restaurant::destroy($id);
        return redirect('restaurant')->with('flash_message', 'restaurant deleted!');
    }
}
