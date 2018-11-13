<?php

namespace Futbol\Http\Controllers;

use Futbol\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $clubes=Club::all();
            return response()->json($clubes, 200);
        }
        return view('clubes.index');
    }
     public function store(Request $request)
    {
        if ($request->ajax()) {
            $club = new Club();
            $club->name = $request->input('name');
            $club->picture = $request->input('picture');
            $club->save();
            return response()->json([
                "message"=> "Club creado correctamente."
            ], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        $club->fill($request->except('avatar'));
        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $club->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $club->save();
        return redirect()->route('clubs.show',[$club])->with('status', 'El Club ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $file_pauth = public_path().'/images/'.$club->avatar;
        \File::delete($file_pauth);
        $club->delete();
        return redirect()->route('clubs.index');
    }
}
