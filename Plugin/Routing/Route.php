<?php
namespace Plenty\Plugin\Routing;


/**
 * Route
 */
abstract class Route 
{

	/**
	 * Add middlewares attached to the route.
	 */
	abstract public function addMiddleware(
		array $middleware
	):self;

	abstract public function getMiddleware(
	):array;

	abstract public function where(
		string $name, 
		 $expression = null
	):self;

}