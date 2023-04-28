<?php

namespace ParkHereMain\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
        ]);

        $user = User::create($validatedData);

        return redirect('/users')->with('success', 'User created successfully!');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email,'.$user->id.'|max:255',
            'password' => 'sometimes|min:6',
        ]);

        $user->update($validatedData);

        return redirect('/users')->with('success', 'success!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('success', 'success!');
    }
}

class IndexController {
  
  public function index() {
    // Load necessary models
    require_once('models/HeaderModel.php');
    require_once('models/ContentModel.php');
    
    // Get data for header
    $headerModel = new HeaderModel();
    $headerData = $headerModel->getData();
    
    // Get data for content
    $contentModel = new ContentModel();
    $contentData = $contentModel->getData();
    
    // Load the index view with data
    require('../header.php');
    require('../index.php');
    require('../oursolution.php');
    require('../Career.php');
    require('../CarRepair.php');
    require('../FindParking.php');
  }
  
}

