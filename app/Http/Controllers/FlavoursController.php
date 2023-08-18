<?php
namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\Flavour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FlavoursController extends Controller
{
    public function index(): View
    {
        return view('flavour.dashboard');
    }

    public function create($menuId)
    {
        $menu = Menu::find($menuId);
        if (!$menu) {
            // Handle the case when the menu is not found
            abort(404);
        }

        return view('restaurant.menu.flavourcreate', ['menu' => $menu]);
    }

    public function store(Request $request, $menuId)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            
            // Add more validation rules as per your requirements
        ]);

        // Create a new flavour
        $flavour = new Flavour();
        $flavour->menu_id = $menuId;
        $flavour->name = $request->input('name');
        $flavour->description = $request->input('description');
         // Assign the selected flavor ID

        // Save the flavour to the database
        $flavour->save();

        // Redirect to the menu show page
        return redirect()->route('menu.show', ['id' => $flavour->menu->restaurant_id, 'menuid' => $menuId]);
    }

    public function edit(string $id)
    {
        $flavour = Meal::find($id);
        return view('flavour.edit')->with('flavour', $flavour);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $flavour = Meal::find($id);
        $input = $request->all();
        $flavour->update($input);
        return redirect('menu')->with('flash_message', 'Meal updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Meal::destroy($id);
        return redirect('menu')->with('flash_message', 'Meal deleted!');
    }
}


