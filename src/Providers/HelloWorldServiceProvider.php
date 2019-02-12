<?php
namespace PlentyHello\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class HelloWorldServiceProvider
 * @package PlentyHello\Providers
 */
class HelloWorldServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(HelloWorldRouteServiceProvider::class);
	}
}
