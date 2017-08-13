<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

use App\User;

class google extends Controller
{
    //


    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


 public function handleProviderCallback()
    {
        

        

try{



$socialuser = Socialite::driver('google')->user();
}  

catch(exception $e){

return redirect('/');

}

$user=User::where('google_id',$socialuser->getid())->first();

if(!$user)
User::create([


'google_id'=>$socialuser->getid(),
'email'=>$socialuser->getemail(),
'name'=>$socialuser->getname(),


    ]);


auth()->login($user);

    return redirect()->to('/home');
    }


}




