<?php

namespace ServiceAuth\Account;

use \ServiceAuth\Account;

class ClientException extends \Exception {}

class Client extends \Transmit\Client
{

	public function fetchByKey($key)
	{
		$response = $this->get(sprintf('/auth/%s', $key));

		if (empty($reponse)) {
			//throw new ClientException('Unable to Fetch Account');
		}

		$account = json_decode($response);
		return new Account($account->id, $account->name, $account->key);
	}

}