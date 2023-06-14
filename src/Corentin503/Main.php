<?php

namespace Corentin503;

use pocketmine\event\block\BlockBurnEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onBurn(BlockBurnEvent $event)
    {
        $event->cancel();
    }
}