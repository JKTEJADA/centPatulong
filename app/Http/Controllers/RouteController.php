<?php
// app/Http/Controllers/RouteController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class RouteController extends Controller
{
    public function create()
    {
        return view('input');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'route_name' => 'required|string|max:255',
            'departure_location' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'distance' => 'required|integer',
            'duration' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/input')
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = $request->file('image')->store('images', 'public');

        $route = new Route();
        $route->route_name = $request->route_name;
        $route->departure_location = $request->departure_location;
        $route->destination = $request->destination;
        $route->distance = $request->distance;
        $route->duration = $request->duration;
        $route->image_path = $imagePath;
        $route->save();

        return redirect()->route('routes.index');
    }

    public function index()
    {
        $routes = Route::all();
        return view('results', compact('routes'));
    }
}
