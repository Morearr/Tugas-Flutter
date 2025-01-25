<?php
namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
    
class TamuController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $tamus = Tamu::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('kode_tamu', 'LIKE', "%{$query}%");
        })->get();

        return response()->json($tamus);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_tamu' => 'required|unique:tamus',
            'nama_tamu' => 'required',
            'alamat_tamu' => 'required',
            'no_telpon' => 'required',
        ]);

        $tamu = Tamu::create($request->all());
        return response()->json($tamu, 201);
    }

    public function update(Request $request, Tamu $tamu)
    {
        $request->validate([
            'kode_tamu' => 'required|unique:tamus,kode_tamu,' . $tamu->id,
            'nama_tamu' => 'required',
            'alamat_tamu' => 'required',
            'no_telpon' => 'required',
        ]);

        $tamu->update($request->all());
        return response()->json($tamu);
    }

    public function destroy(Tamu $tamu)
    {
        $tamu->delete();
        return response()->json(null, 204);
    }
}