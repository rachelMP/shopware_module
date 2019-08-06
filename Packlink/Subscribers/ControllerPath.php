<?php

namespace Packlink\Subscribers;

use Enlight\Event\SubscriberInterface;

class ControllerPath implements SubscriberInterface
{
    /**
     * @var string
     */
    private $pluginDirectory;

    /**
     * @param $pluginDirectory
     */
    public function __construct($pluginDirectory)
    {
        $this->pluginDirectory = $pluginDirectory;
    }


    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Dispatcher_ControllerPath_Backend_PacklinkMain' => 'onGetControllerPromotion',
        ];
    }

    /**
     * Controller path handler, generates controller path based on a event name
     *
     * @param \Enlight_Event_EventArgs $arguments
     * @return string Controller path
     */
    public function onGetControllerPromotion(\Enlight_Event_EventArgs $arguments)
    {
        $eventName = $arguments->getName();

        $moduleAndController = str_replace('Enlight_Controller_Dispatcher_ControllerPath_', '', $eventName);
        list($module, $controller) = explode('_', $moduleAndController);

        return "{$this->pluginDirectory}/Controllers/{$module}/{$controller}.php";
    }
}