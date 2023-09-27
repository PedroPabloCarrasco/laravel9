<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carreras;

class CarrerasController extends Controller
{

    public function index()
    {
        $carreras = Carreras::all();
        return view('Carreras',compact('carreras'));
    }

    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

 
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }
}
