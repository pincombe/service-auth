<?php

namespace ServiceAuth\Account;

class ClientException extends \Exception {}

class Client extends \Transmit\Client
{

	public function fetchByKey($key)
	{
		$response = $this->get(sprintf('/auth/%s', $key));
		return json_decode($response);
	}

}