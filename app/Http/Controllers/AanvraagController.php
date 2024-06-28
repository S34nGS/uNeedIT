<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aanvraag;

class AanvraagController extends Controller
{
    function show() {
        $data=Aanvraag::all();
        return view('readAanvraag', ['aanvraag'=>$data]);
    }

    function destroy($id) {
        $aanvraag = Aanvraag::findOrFail($id);
        $aanvraag->delete();
        return redirect()->route('aanvragen')->with('success', 'Aanvraag deleted successfully');
    }

    public function edit($id)
    {
        $aanvraag = Aanvraag::findOrFail($id);
        return view('edit', compact('aanvraag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'option' => 'required',
            'modelNumber' => 'required',
            'message' => 'required',
        ]);

        $aanvraag = Aanvraag::findOrFail($id);
        $aanvraag->update($request->all());
        
        return redirect()->route('aanvragen')->with('success', 'Aanvraag updated successfully');
    }
}
