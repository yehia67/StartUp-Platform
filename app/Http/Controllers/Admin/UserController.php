<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('products.index')
                        ->with('success', 'Product created successfully.');
    }

    //Ajax calls
    public function loadData(User $users)
    {
        $users = User::all();

        return DataTables::of($users)
        ->rawColumns(['action'])
        ->editColumn('action', function ($mode) {
            return '<h1>yarab</h1>';
        })
        ->make(true);
    }
}
