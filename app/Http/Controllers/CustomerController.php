<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;


class CustomerController extends Controller
{

    public function index(){

        $customer = Customer::orderby('created_at')->paginate(10);

        return view('Customer', ["customer" => $customer]);
    }

    public function create()
    {
        return view('customer.create'); 
    }

    public function more($id)
    {
        $customer = Customer::findOrFail($id);
        
        return view('more', ["customer" => $customer]); 
    }

    public function store(Request $request)
    {
    // Validasi input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
    ]);

    Customer::create($validated);

    return redirect()
        ->route('Customer')
        ->with('success', 'Customer created successfully!');
    }

    public function edit($id)
    {
    $customer = Customer::findOrFail($id);
    return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
    ]);

    $customer = Customer::findOrFail($id);
    $customer->update($validated);

    return redirect()->route('more', $customer->id)->with('success', 'Customer updated successfully!');
    }

    public function destroy(Customer $customer) {

      $customer->delete();

      return redirect()->route('Customer')->with('success', 'Customer Deleted!');
    }

    

    
}
