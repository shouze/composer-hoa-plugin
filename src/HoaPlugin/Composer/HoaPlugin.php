<?php

namespace HoaPlugin\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use HoaPlugin\AutoloadGenerator;

class HoaPlugin implements PluginInterface
{
    /**
     * Set hoa\core require in last position.
     *
     * @param Composer    $composer composer
     * @param IOInterface $io       io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $composer->setAutoloadGenerator(
            new AutoloadGenerator($composer->getEventDispatcher())
        );
    }
}
