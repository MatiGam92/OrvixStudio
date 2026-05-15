<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->get();

        return view('admin.leads', compact('leads'));
    }

    public function updateEstado(Request $request, Lead $lead)
    {
    $request->validate([
        'estado' => 'required|string'
    ]);

    $lead->update([
        'estado' => $request->estado
    ]);

    return response()->json(['ok'=>true]);
    }

    public function destroy($id)
    {
    $lead = Lead::findOrFail($id);

    $lead->delete();

    return back()->with('success','Lead eliminado');
    }
}
