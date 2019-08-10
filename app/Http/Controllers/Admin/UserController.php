<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
  public function explanation()
  {
      return view('admin.user.explanation');
  }
  
  public function category()
  {
      return view('admin.user.category');
  }
  
  public function contact()
  {
      return view('admin.user.contact');
  }
  
}
