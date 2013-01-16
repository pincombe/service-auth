<?php

namespace ServiceAuth;

class ServiceException extends \Exception {}

class Service
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