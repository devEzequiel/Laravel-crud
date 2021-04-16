<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = DB::select("SELECT * FROM properties");

        return view("property/index")->with('properties', $properties);
    }

    public function show(int $id)
    {
        $property = DB::select('SELECT * FROM properties WHERE id = ? ', [$id]);

        if (!empty($property)) {
            return view("property/show")->with('property', $property);
        } else {
            return redirect()->action('App\Http\Controllers\PropertyController@index');
        }
    }

    public function create()
    {
        return view("property/create");
    }

    public function store(Request $request)
    {
        $property = [
            $request->title,
            $request->descrip,
            $request->sale,
            $request->rental
        ];
        DB::insert("INSERT properties (title, description, sale_price, rental_price) VAlUES
                    (?, ?, ?, ?)", $property);

        return redirect()->action('App\Http\Controllers\PropertyController@index');
    }
}
