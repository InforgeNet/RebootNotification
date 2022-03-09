<?php

namespace Inforge\RebootNotification;

use function file_exists;

class Listener
{
	public static function checkReboot(\XF\Admin\App $app, array &$params,
		\XF\Mvc\Reply\AbstractReply &$reply, \XF\Mvc\Renderer\AbstractRenderer &$renderer)
	{
		$options = \XF::options();
		$params['systemRebootNeeded'] =
			!empty($options->ifRnCheckFile)
			&& file_exists($options->ifRnCheckFile);
	}
}
