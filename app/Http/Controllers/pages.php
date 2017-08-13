<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
   public function index()

{

return view('blade.index');


}
 public function contact()

{

return view('blade.contact');


}

 public function products()

{

return view('blade.products');


}


 public function about()

{

return view('blade.about');


}
}


