<?php

namespace ServiceAuth;

class AccountException extends \Exception {}

class Account
{
	public $id;
    public $name;
    public $key;
    public $settings = array();

    public function __construct($id, $name, $key, $settings)
	{
		$this->id = $id;
		$this->name = $name;
		$this->key = $key;
		$this->settings = $settings;
	}
}