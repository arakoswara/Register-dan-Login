<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Role;
use Auth;
use Image;
use Input;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);

        //return view('admin.index', compact('user'));

        return view('admin.home.index');
    }

    public function resize(Request $request)
    {
        $post = $request->all();
        $image = $request->file('photo');
        $img = Image::make($image->getRealPath())->resize(200,200);

        $img->save('uploads/121.png');
    }
}
