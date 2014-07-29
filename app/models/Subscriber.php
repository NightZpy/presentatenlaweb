<?php

class Subscriber extends Eloquent {

	protected $table = 'subscribers';

	public static function alreadySubscriber($email)
	{
		return !Subscriber::whereEmail($email)->get()->isEmpty();
	}		
}
