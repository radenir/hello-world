<?php

class HelloWorld {

	public function __construct() {
		die('Initialization is not allowed');
	}

	public static function getMessage() {
		return 'Hello world!';
	}
}
