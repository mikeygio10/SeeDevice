<?php
namespace SeeDevice;
use pocketmine\plugin\PluginBase as Plugin;
use pocketmine\Server;
use pocketmine\scheduler\Task;
use pocketmine\Player;
class TheTask extends Task{
	public function __construct(Plugin $plugin){
		$this->api = $plugin;
	}

	public function onRun($currentTick){
		foreach(Server::getInstance()->getOnlinePlayers() as $player){
			$player->setNameTagVisible();
			#Thanks to virvolta
			$player->setScoreTag("§c".$player->getHealth()." §c❤\n§b".$this->api->getUos($player));
		}
	}
}
