<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Auth;
class ComplaintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'description' => 'required|string',
        ]);
        
        Complaint::create($request->all());
        return redirect()->route('home')->with('success', 'Complaint submitted successfully!');

         
    }

    public function list()
    {
        $complaints = Complaint::all();
        // return redirect()->route('complaints.list');
        return view('list', compact('complaints'));
    }
}

