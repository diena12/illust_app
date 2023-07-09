<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IllustController extends Controller
{

  public function index() {
    return view('admin.illust_list');
  }

}