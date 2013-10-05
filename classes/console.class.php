<?php

abstract class DisplayConsole
{
	protected $console = null;

	abstract protected function generateConsole();
}

class Console extends DisplayConsole
{
	static protected $instance = null;

	private function __construct()
	{
		return false;
	}

	private function __clone()
	{
		return false;
	}

	private function __wakeup()
	{
		return false;
	}

	static public function init()
	{
		if (!isset(self::$instance)) {
			$class = __CLASS__;
			self::$instance = new $class();
		}
		return self::$instance;
	}

	public function display()
	{
		echo 'Hello World';
	}

	protected function generateConsole()
	{
		// TODO: Implement generateConsole() method.
	}
}

function console()
{
	return Console::init();
}