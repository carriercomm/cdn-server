<?php

namespace CDNServer\Core\EventListener\Base;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * 
 * @author Pierre LECERF
 */
interface ControllerListenerInterface
{
	public function onKernelController(FilterControllerEvent $event);
}
