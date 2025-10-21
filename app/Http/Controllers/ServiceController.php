<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Grooming;
use App\Models\Clinic;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function create()
    {
        $animal = Animal::all();
        return view('servicee.create', compact('animal'));
    }

    public function history(Request $request)
    {
    $type = $request->query('type', 'grooming'); 

    if ($type === 'clinic') {
        $services = Clinic::with('animal')->latest()->paginate(10);
    } else {
        $services = Grooming::with('animal')->latest()->paginate(10);
    }

    return view('historyy.history', compact('services', 'type'));
    }

    
    public function redirect(Request $request)
    {
        $request->validate([
            'type' => 'required|in:Grooming,Clinic',
            'animal_id' => 'required|exists:animals,id',
        ]);

        $animalId = $request->animal_id;

        if ($request->type == 'Grooming') {
            return redirect()->route('grooming.create', $animalId);
        } else {
            return redirect()->route('clinic.create', $animalId);
        }
    }

    
    public function createGroom($animalId)
    
    {
        $animal = Animal::findOrFail($animalId);

        $services = [
            ['name' => 'Mandi Biasa', 'price' => 50000],
            ['name' => 'Mandi Kutu', 'price' => 75000],
            ['name' => 'Potong Bulu', 'price' => 100000],
        ];
        return view('servicee.creategroom', compact('animal', 'services'));
    }

    
    public function createClinic($animalId)
    {
        $animal = Animal::findOrFail($animalId);


        return view('servicee.createclinic', compact('animal'));
    }

    public function storeGrooming(Request $request)
    {
        $request->validate([
            'animal_id' => 'required|exists:animals,id',
            'date' => 'required|date',
            'service_type' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Grooming::create($request->all());

        return redirect()->route('Animal')->with('success', 'Grooming service created successfully.');
    }

    
    public function storeClinic(Request $request)
    {
        $request->validate([
            'animal_id' => 'required|exists:animals,id',
            'date' => 'required|date',
            'diagnosis' => 'required|string',
            'treatment' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Clinic::create($request->all());

        return redirect()->route('Animal')->with('success', 'Clinic service created successfully.');
    }
}
