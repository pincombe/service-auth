<?php

namespace ServiceAuth;

class AccountException extends \Exception {}

class Account
{
	public $id;
    public $name;
    public $key;

    public function __construct($id, $name, $key)
	{
		$this->id = $id;
		$this->name = $name;
		$this->key = $key;
	}
}