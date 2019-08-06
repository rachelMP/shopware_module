<?php

namespace Packlink;

use Packlink\Packlink as Plugin;
use Shopware\Tests\Functional\Components\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'Packlink' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['Packlink'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}