<?php

namespace Theobrz;

use pocketmine\plugin\PluginBase as Theobrz;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\level\Level;
use pocketmine\level\sound\ClickSound;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginManager;
use pocketmine\event\player\PlayerInteractEvent;

class Main extends Theobrz implements Listener{
    
    public function onEnable(){
       $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
       $this->getLogger()->info("§aO Plugin foi carregado Corretamente.");
    
       $this->getLogger()->info("§7Pluginby: §1Theobrz");
 
    }
       
    public function onUse(PlayerInteractEvent $event) {
            $player = $event->getPlayer();
            if(count($player->getEffects()) != 3) {
            if($event->getItem()->getID() == 282) {
            if($player->getHealth()<=19) {
                $player->setFood(20);
                $player->addEffect(Effect::getEffect(6)->setAmplifier(0)->setDuration(0)->setVisible(false));
                $player->getInventory()->removeItem(Item::get(282, 0, 1));
                $player->getInventory()->addItem(Item::get(281, 0, 1));
		$player = $event->getPlayer();
		$player->getlevel()->addSound(new ClickSound($player));
}
}
}
}
}