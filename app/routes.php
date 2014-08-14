<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('themes.meilleur.pages.home');
});

Route::post('suscribe', function(){
	$validator = Validator::make(Input::all(), array('email' => 'email'));
	if($validator->fails()) {
		return 'invalid_email';
	} else {
		if(Subscriber::alreadySubscriber(Input::get('email')))
			return 'already_subscribed';
		
		Mail::send('emails.suscribe', array(), function($message)
		{
		  $message->to(Input::get('email'), Input::get('email'))
		  			->from('informacion@presentatenlaweb.com', 'Presentatenlaweb Atención al cliente')
		          	->subject('Te has suscrito a Presente en la Web!');
		});			

		$subscriber = new Subscriber();
		$subscriber->email = Input::get('email');
		$subscriber->save();
		return 'successful';
	}
});

Route::post('registerContact', function ()
{
	$rules = array(
					'name' => 'required|alpha_num|digits_between:3,128',
					'email' => 'required|email',
					'subject' => 'required|digits_between:3,128',
					'message' => 'required|digits_between:10,512'
				);

	$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()) {
		return json_encode(array('success' => 1, $validator->messages()));
	} else {
		$contact = new Contact;
		$contact->name = Input::get('name');
		$contact->email = Input::get('email');
		$contact->subject = Input::get('subject');
		$contact->message = Input::get('message');
		$contact->save();

		return json_encode(array('success' => 0, 'name' => $contact->name, 'email' => $contact->email));
	}
});


