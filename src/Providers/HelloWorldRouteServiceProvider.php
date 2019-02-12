<?php
namespace PlentyHello\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class HelloWorldRouteServiceProvider
 * @package PlentyHello\Providers
 */
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello', 'PlentyHello\Controllers\ContentController@sayHello');
		$router->get('topitems', 'PlentyHello\Controllers\ContentController@showTopItems');
	}

}
