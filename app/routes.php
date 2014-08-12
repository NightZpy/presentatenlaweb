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

Route::get('change_locale/{local}',function($local) {
	//Set locale
	Session::put('my.locale', $local);
    return Redirect::to('/');
});

Route::get('test', function() 
{
    $a = File::getRequire(base_path().'/app/lang/en/titulos.php');

    foreach($a as $key => $value)
    {
        echo "$key => $value<br>";
    }
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


