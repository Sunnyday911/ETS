<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Customer;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){

        $animal = Animal::orderby('created_at')->paginate(10);

        return view('Animal', ["animal" => $animal]);
    }

    public function create(){

        $customer = Customer::all();
        return view('animal.createan', ["customer" => $customer]);
    }

    public function store(Request $request)
    {
    
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:0',
        'type' => 'required|string|max:50',
        'customer_id' => 'required|exists:customers,id',
    ]);


    Animal::create($validated);

    return redirect()
        ->route('Animal') 
        ->with('success', 'Animal created successfully!');
    }


    public function morean($id)
    {
        $animal = Animal::findOrFail($id);
        
        return view('morean', ["animal" => $animal]); 
    }

    public function edit($id)
        {
    $animal = Animal::findOrFail($id);
    $customers = Customer::all(); 
    return view('animal.edit', compact('animal', 'customers'));
    }

    public function update(Request $request, $id)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:0',
        'type' => 'required|string|max:50',
        'customer_id' => 'required|exists:customers,id',
    ]);

    $animal = Animal::findOrFail($id);
    $animal->update($validated);

    return redirect()->route('morean', $animal->id)->with('success', 'Animal updated successfully!');
    }

    public function destroy(Animal $animal) {
      
      $animal->delete();

      return redirect()->route('Animal')->with('success', 'Animal Deleted!');
    }

}
