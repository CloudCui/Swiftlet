<?php

namespace Rss\Listeners;

use \Swiftlet\Abstracts\Controller as ControllerAbstract;
use \Swiftlet\Abstracts\Listener as ListenerAbstract;
use \Swiftlet\Abstracts\View as ViewAbstract;

/**
 * Example plugin
 */
class Rss extends ListenerAbstract
{
	/**
	 * actionAfter event listener
	 */
	public function actionAfter(ControllerAbstract $controller, ViewAbstract $view)	{}
}
