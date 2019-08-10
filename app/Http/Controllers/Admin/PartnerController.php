<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    //
    public function partner()
  {
      return view('admin.partner.partner');
  }
}
