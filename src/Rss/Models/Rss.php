<?php

namespace Rss\Models;

use \Swiftlet\Abstracts\Model as ModelAbstract;

/**
 * RSS model
 */
class Rss extends ModelAbstract
{
	/**
	 * Get the last image from RSS feed
	 * @return string
	 */
	public function getLastImgUrl()
	{
		$source = "http://www.reddit.com/r/pics.xml";

		if($content = file_get_contents($source)) {
			$imgTag = substr($content, strrpos($content, '&lt;img src=&quot;') + 18); // hardcoded - plus the length of -> &lt;img src=&quot; <-
			$imgTag = substr($imgTag, 0, strpos($imgTag	, '&quot;')); 
		} else 
			return "Error";

		return html_entity_decode($imgTag);
	}
}
