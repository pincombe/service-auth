<?php

namespace ServiceAuth\Account;

class ClientException extends \Exception {}

class Client extends \Transmit\Client
{

	public function fetch($id)
	{
		$response = $this->get(sprintf('/keyring/%s', $key));
		return json_decode($response);
	}

}