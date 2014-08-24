<?php

class Contact extends \Eloquent {
	protected $fillable = [];

	public static function alreadyContact($email)
	{
		return !Contact::whereEmail($email)->get()->isEmpty();
	}	
}