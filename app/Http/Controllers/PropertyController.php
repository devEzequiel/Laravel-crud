<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function index()
    {
        //$properties = DB::select("SELECT * FROM properties");
        $properties = Property::all();
        return view("property/index")->with('properties', $properties);
    }

    public function show($name)
    {
        //$property = DB::select('SELECT * FROM properties WHERE name = ? ', [$name]);
        $property = Property::where('name', $name)->get();

        if (!empty($property)) return view("property/show")->with('property', $property); else {
            return redirect()->action('App\Http\Controllers\PropertyController@index');
        }
    }

    public function create()
    {
        return view("property/create");
    }

    public function store(Request $request)
    {
        $name = $this->setName($request->title);

        $property = [
            $request->title,
            $request->descrip,
            $request->sale,
            $request->rental,
            $name
        ];
        DB::insert("INSERT properties (title, description, sale_price, rental_price, name) VAlUES
                    (?, ?, ?, ?, ?)", $property);

        return redirect()->action('App\Http\Controllers\PropertyController@index');
    }

    public function edit(string $name)
    {
//        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();
        return view("property/edit")->with('property', $property);
    }

    public function update(Request $request, int $id)
    {
        $name = $this->setName($request->title);

        $property = [
            $request->title,
            $request->descrip,
            $request->sale,
            $request->rental,
            $name,
            $id
        ];
        DB::update("UPDATE properties SET title = ?, description = ?, sale_price = ?, rental_price = ?, name = ?
                            WHERE id = ?", $property);

        return redirect()->action('App\Http\Controllers\PropertyController@index');
    }

    public function remove(string $name)
    {
//        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();
        if (!empty($property)) {
            DB::delete("DELETE FROM properties WHERE name = ?", [$name]);
        }
        return redirect()->action('App\Http\Controllers\PropertyController@index');
    }

    private function setName($title)
    {
        $propertySlug = Str::slug($title);

//        $properties = DB::select('SELECT * FROM properties');
        $properties = Property::all();
        $t = 0;
        foreach ($properties as $property) {
            if ($propertySlug === Str::slug($property->title)) {
                $t++;
            }
        }

        if ($t > 0) {
            $propertySlug = $propertySlug.'-'.$t;
        }
        
        return $propertySlug;
    }
}
