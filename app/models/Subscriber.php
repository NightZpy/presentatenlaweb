<?php

class Subscriber extends Eloquent {

	protected $table = 'subscribers';
	use SoftDeletingTrait;

	public static function alreadySubscriber($email)
	{
		return !Subscriber::whereEmail($email)->get()->isEmpty();
	}		
}
