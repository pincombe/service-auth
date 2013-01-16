<?php

namespace ServiceAuth;

class ClientException extends \Exception {}

class Client extends \Transmit\Client
{

	public function isAuthorised($key)
	{
		$response = $this->get(sprintf('/key/%s', $key));
		return json_decode($response);
	}

}