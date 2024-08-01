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
            'address' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
    
        // Merge the user_id into the request data
        $data = $request->all();
        $data['user_id'] = auth()->id();
    
        Complaint::create($data);
    
        return redirect()->route('home')->with('success', 'Complaint submitted successfully!');
    }
    

    public function list()
    {
        if (auth()->user()->role == 'admin') {
            $complaints = Complaint::all();
        } else {
            $complaints = Complaint::where('user_id', auth()->id())->get();
        }
        return view('list', compact('complaints'));
    }
    
}

