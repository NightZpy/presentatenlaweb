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
	//return View::make('themes.coming-soon.pages.home');
});


Route::get('main', function()
{
	return View::make('themes.meilleur.pages.home');
});

Route::get('software-eduktivo', function()
{
	return View::make('themes.eduktivo-page.pages.home');
});

Route::get('change_locale/{local}',function($local) {
	//Set locale
	Session::put('my.locale', $local);
    return Redirect::to('/');
});

Route::post('suscribe', function(){
	$validator = Validator::make(Input::all(), array('email' => 'email'));
	if($validator->fails()) {
		return 'invalid_email';
	} else {
		if(Subscriber::alreadySubscriber(Input::get('email')))
			return 'already_subscribed';					

		$subscriber = new Subscriber();
		$subscriber->email = Input::get('email');
		$subscriber->save();

		Mail::send('emails.suscribe', array('name' => $subscriber->email), function($message)
		{
		  $message->to(Input::get('email'), Input::get('email'))
		  			->from('informacion@presentatenlaweb.com', 'Presentatenlaweb Atención al cliente')
		          	->subject('Te has suscrito a Presente en la Web!');
		});

		return 'successful';
	}
});

Route::post('registerContact', function ()
{
	$rules = array(

					'name' => 'required|alpha_num|between:3,128',
					'email' => 'required|email|unique:contacts,email',
					'subject' => 'required|between:3,128',
					'message' => 'required|between:10,512'
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
		$contact->subscriber = (Input::has('subscriber') == 'on' ? true : false);
		$contact->save();

		if($contact->subscriber) {	
			Mail::send('emails.contact-subscribe', array('contact' => $contact), function($message) use ($contact)
			{
			  $message->to($contact->email, $contact->name)
			  			->from('informacion@presentatenlaweb.com', 'Presentatenlaweb Atención al cliente: Suscripción')
			          	->subject('Suscripción a Presentatenlaweb');
			});		
		}		

		Mail::send('emails.contact-message', array('contact' => $contact), function($message) use ($contact)
		{
		  $message->to($contact->email, $contact->name)
		  			->from('informacion@presentatenlaweb.com', 'Presentatenlaweb Atención al cliente')
		          	->subject('Solicitud de información: ' . $contact->subject);
		});

		return json_encode(array('success' => 0));
	}
});

Route::post('contactBuy', function ()
{
	$rules = array(
					'name' => 'required|alpha_num|between:3,128',
					'email' => 'required|email|unique:software_applications,email',
					'phone' => 'required|numeric|digits_between:7,11',
					'software' => 'required|alpha',
				);

	$validator = Validator::make(Input::all(), $rules);

	if ($validator->fails()) {
		return json_encode(array('success' => 1, $validator->messages()));
	} else {
		
		$softwareApplication 			= new SoftwareApplication;
		$softwareApplication->name 		= Input::get('name');
		$softwareApplication->email 	= Input::get('email');
		$softwareApplication->phone 	= Input::get('phone');
		$softwareApplication->software 	= Input::get('software');
		$softwareApplication->save();

		Mail::send('emails.software-application', array('softwareApplication' => $softwareApplication), function($message) use ($softwareApplication)
		{
		  $message->to($softwareApplication->email, $softwareApplication->name)
		  			->from('informacion@presentatenlaweb.com', 'Presentatenlaweb - Atención al cliente')
		          	->subject('Solicitud adquisición ' . $softwareApplication->software);
		});

		Mail::send('emails.software-application', array('softwareApplication' => $softwareApplication), function($message) use ($softwareApplication)
		{
		  $message->to('informacion@presentatenlaweb.com', 'Presentatenlaweb - Atención al cliente')
		  			->from($softwareApplication->email, $softwareApplication->name)
		          	->subject('Solicitud adquisición ' . $softwareApplication->software);
		});

		Mail::send('emails.software-application', array('softwareApplication' => $softwareApplication), function($message) use ($softwareApplication)
		{
		  $message->to('nightzpy@gmail.com', 'Lenyn Alcántara')
		  			->from($softwareApplication->email, $softwareApplication->name)
		          	->subject('Solicitud adquisición ' . $softwareApplication->software);
		});

		return json_encode(array('success' => 0));
	}
});

Route::get('notifyReady', function ()
{
	// $subscriber = new Subscriber;
	// $subscriber->name = 'Lenyn Alcántara';
	// $subscriber->email = 'nightzpy@gmail.com';
	// $contact = Contact::whereEmail($subscriber->email)->first();

	// Mail::send('emails.contact-notification-ready', array('name' => $subscriber->name, 'id' => $contact->id), function($message) use ($subscriber)
	// {
	//   $message->to($subscriber->email, $subscriber->name)
	//   			->from('informacion@presentatenlaweb.com', 'Presentatenlaweb - Atención al cliente')
	//           	->subject('Ya estamos trabajando.');
	// });	


	$subscribers = Subscriber::all();

	foreach ($subscribers as $subscriber) {
		$id = Contact::whereEmail($subscriber->email)->take(1)->id;

		Mail::send('emails.contacts-notification-ready', array('name' => $subscriber->name, 'id' => $id), function($message) use ($subscriber)
		{
		  $message->to($subscriber->email, $subscriber->name)
		  			->from('informacion@presentatenlaweb.com', 'Presentatenlaweb: Atención al cliente')
		          	->subject('Ya estamos trabajando.');
		});	
	}
});


Route::get('unsubscribe/{id}', function($id) {
	$contact = Contact::find($id)->first();
	$contact->subscriber = 0;
	$contact->save();

	$subscriber = Subscriber::whereEmail($contact->email)->first();
	if($subscriber)
		$subscriber->delete();
	Redirect::to('/');
});
