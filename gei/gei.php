<?php

require_once 'config.php';
require_once $google_path . 'autoload.php'; // or wherever autoload.php is located

class elasticSearchBridge {
	public Array $hosts = [$elasticSearchPath];
	public ClientBuilder $client = ClientBuilder::create()           // Instantiate a new ClientBuilder
    $client->setHosts($hosts)      // Set the hosts
    $c = $client->build();              // Build the client object
}

class googleBridge {
	private Google_Client $googleClient = new Google_Client();
	
	$googleClient->setApplicationName($application_name);
	$googleClient->setDeveloperKey($google_app_key);
}
?>