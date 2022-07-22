<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $people = Person::with(Person::getRelationships())->paginate(10);

        return response()->json($people, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $newPerson = Person::create( $data );

        if (isset($data['student']) && $data['student']) {
            $newPerson->student()->create($data['student']);
        }

        if (isset($data['professor']) && $data['professor']) {
            $newPerson->professor()->create($data['professor']);
        }

        if (isset($data['address']) && $data['address']) {
            $newPerson->address()->create($data['address']);
        }

        return response()->json($newPerson->address(), 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $person = Person::with(Person::getRelationships())->findOrfail($id);

        return response()->json($person, 200);
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
        //

        $data = $request->all();

        $person = Person::with(Person::getRelationships())->findOrFail( $id );

        $person->update($data);

        if (isset($data['student']) && $data['student']) {
            $person->student()->update($data['student']);
        }

        if (isset($data['professor']) && $data['professor']) {
            $person->professor()->update($data['professor']);
        }

        if (isset($data['address']) && $data['address']) {
            $person->address()->update($data['address']);
        }

        return response()->json($person, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $person = Person::with(Person::getRelationships())->findOrFail( $id );

        $person->delete();

        return response()->json($person, 201);
    }
}
