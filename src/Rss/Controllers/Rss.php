<?php

namespace Rss\Controllers;

use \Rss\Models\Rss as RssModel;
use \Swiftlet\Abstracts\Controller as ControllerAbstract;

/**
 * Index controller
 */
class Rss extends ControllerAbstract
{
	/**
	 * Page title
	 * @var string
	 */
	protected $title = 'This is the title of RSS!';

	/**
	 * Default action
	 * @param $args array
	 */
	public function index(array $args = array())
	{
		// Create a model instance, see /src/Rss/Models/Example.php
		$rss = new RssModel;

		// Get some data from the model and pass it to the view to display it
		$this->view->imgUrl = $rss->getLastImgUrl();
	}
}
