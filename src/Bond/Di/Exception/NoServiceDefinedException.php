<?php

/*
 * (c) Captain Courier Integration <captain@captaincourier.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */



namespace Bond\Di\Exception;

class NoServiceDefinedException extends \Exception
{
	public $reflClass;
	public function __construct( \ReflectionClass $reflClass )
	{
		$this->reflClass = $reflClass;
		$this->message = "Using Bond\Di\DiTestCase you need a @service annotation defined in `{$this->reflClass->getName()}` (or it's class hieracy.";
	}
}