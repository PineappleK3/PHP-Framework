# PHP-Framework

## Installation
**Clone** or **Download** the repository and upload the `/lib/` directory to your webserver.
Include in your `PHP` file the `autoload.php` and start coding!

## Example

```php
<?php
	// Include the Library
	require_once('lib/autoload.php');

	// Create a new Instance of "Knuddels"
	$knuddels = new Knuddels();
	
	// Create a new bundled package for checknick-registration
	$packet = $knuddels->register()->checkNick('RegTesting123');
	// Send POST request with these Payload to the Server
	
	$decoded = Packet::decode($packet);
	// Server receives the Packet and will decode these
	
	// After that, you can access the data
	var_dump($decoded->getNick());
?>
```