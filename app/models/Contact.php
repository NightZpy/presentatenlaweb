<?php

class Contact extends \Eloquent {
	protected $fillable = [];

	public static function alreadyContac($email)
	{
		return !Contact::whereEmail($email)->get()->isEmpty();
	}	
}