<?php namespace App;

use Session;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

  public static function SaveComment($request){
    
    $comment = false;
     
    $contact = new contact();
    $contact->name = $request['name'];
    $contact->email = $request['email'];
    $contact->subject = $request['subject'];
    $contact->article = $request['article'];
    $contact->save();
    Session::flash('success', "Thanks for contact us! hope to see you again ;)");
    $comment = true;
        
    return $comment;
  }
}