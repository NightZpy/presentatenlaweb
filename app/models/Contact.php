<?php

class Contact extends \Eloquent {
	protected $fillable = [];
	use SoftDeletingTrait;

	public static function alreadyContact($email)
	{
		return !Contact::whereEmail($email)->get()->isEmpty();
	}	
}