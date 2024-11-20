<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

  public function welcome()
  {
      $titolo = 'HACK124'; 
      return view('welcome', ['titolo' => $titolo]);
  }




 public  function chiSiamo(){
        $studenti = [
    
            ['id' => 1, 'name' => 'Leonardo' , 'surname'=>'Asaro'],
            ['id' => 2,'name' =>'Michele', 'surname'=>'Sette'],
            ['id' => 3,'name' =>'Emanuele', 'surname'=>'Di Napoli'],
            
    
        ];
      return view('chiSiamo', ['studenti' => $studenti]); //-> ritorna una vista e va a vedere i file contenuti nella cartella views
    }


public function dettaglio($id){
  $studenti = [
    
    ['id' => 1, 'name' => 'Leonardo' , 'surname'=>'Asaro'],
    ['id' => 2,'name' =>'Michele', 'surname'=>'Sette'],
    ['id' => 3,'name' =>'Emanuele', 'surname'=>'Di Napoli'],
    

];
foreach ($studenti as $studente ) {
  if($id == $studente['id']){
    return view('studenti.detail',['studente'=>$studente]);
  }
}
}



// ROTTA POST CONTACTUS
public function contactUs(Request $request){

  $user = $request->input('user');
  $email = $request->input('email');
  $message = $request->input('message');
  $userData = compact('user', 'email', 'message');

  try{

    Mail::to($email)->send(new ContactMail($userData));
  }
    
catch(Exception $e){

return redirect()->route('welcome')->with('emailError', "C'è stato un problema con invio mail, riprova dopo");
}


  return redirect(route('welcome'))->with('emailSent', 'Hai correttamente inviato un email');
}



}


