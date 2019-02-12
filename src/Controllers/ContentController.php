<?php
namespace PlentyHello\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

/**
 * Class ContentController
 * @package PlentyHello\Controllers
 */
class ContentController extends Controller
{
	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function sayHello(Twig $twig):string
	{
		return $twig->render('PlentyHello::content.hello');
	}
}
