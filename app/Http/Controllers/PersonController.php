<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Info;
use App\Address;
use Session;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::orderBy('id')->get();
        return view('person.index', ['people' => $people]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'birth_year' => 'required|integer',
        ]);

        $person = Person::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'bith_year' => $request->birth_year,
        ]);

        $info = $person->info()->create([
            'info' => $request->info,
        ]);

        $address = $person->address()->create([
            'street' => $request->street,
            'city' => $request->city,
            'country' => $request->country,
            'house_number' => $request->house_number,
        ]);

        //storing image
        if ($request->has('user_photo')) {
            $extension = $request->file('user_photo')->extension();
            $request->file('user_photo')->storeAs('public/photos/'.$person->id, '1.' . $extension);
        }

        $person->info_id = $info->id;
        $person->address_id = $address->id;
        $person->save();

        Session::flash('success', 'Person has been added');

        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::findOrFail($id);
        return view('person.edit', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::with('info')->with('address')->findOrFail($id);
        return view('person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'birth_year' => 'required|integer',
        ]);

        $person = Person::with('info')->with('address')->findOrFail($id);

        $person->first_name = $request->first_name;
        $person->last_name = $request->last_name;
        $person->bith_year = $request->birth_year;
        $person->info->info = $request->info;
        $person->address->street = $request->street;
        $person->address->city = $request->city;
        $person->address->country = $request->country;
        $person->address->house_number = $request->house_number;
        $person->update();

        //storing image
        if ($request->has('user_photo')) {
            $extension = $request->file('user_photo')->extension();
            $request->file('user_photo')->storeAs('public/photos/'.$person->id, '1.' . $extension);
        }


        Session::flash('success', 'Information has been updated');
        return redirect()->route('people.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
        return redirect()->back();
    }
}
