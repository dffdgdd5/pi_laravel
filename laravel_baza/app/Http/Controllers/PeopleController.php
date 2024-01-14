<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    

    public function create(Request $request){
        $people = new People();
        $people->id = $request->id;
        $people->name = $request->name;
        $people->surname = $request->surname;
        $people->phone_number = $request->phone_number;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;

        $people->save();

        return response()->json('created succesfully '.'id: '.$people->id.' name: '.$people->name.' surname: '.$people->surname.' phone_number: '.$people->phone_number.' street: '.$people->street.' city '.$people->city.' country: '.$people->country);
    }

    public function update(Request $request)
    {
        $people =People::findorfail($request->id);
        $people->name = $request->name;
        $people->surname = $request->surname;
        $people->phone_number = $request->phone_number;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;

        $people->update();

            return response()->json('updated successfully '.'id: '.$people->id.' name: '.$people->name.' surname: '.$people->surname.' phone_number: '.$people->phone_number.' street: '.$people->street.' city '.$people->city.' country: '.$people->country);
    }

    public function delete(Request $request)
    {
        $people =People::findorfail($request->id)->delete();

            return response()->json('deleted successfully');
    }
    public function read(Request $request)
    {
        $people =People::findorfail($request->id);
        return response()->json($people);

    }
    public function readall()
    {
        $people = People::all();

        return response()->json($people);
    }
}
