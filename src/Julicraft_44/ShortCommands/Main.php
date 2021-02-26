<?php

declare(strict_types=1);

namespace Julicraft_44\ShortCommands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\plugin\Plugin;
use pocketmine\utils\Config;
use pocketmine\Player;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
	
	public $config;
	
	public function onEnable() {
		$this->saveDefaultConfig();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
		switch($cmd->getName()) {
			case "gm0":
			if($sender instanceof Player) {
				if($sender->hasPermission("sc.gm0")) {
			
					if(count($args) < 1) {
						$sender->setGamemode(0);
						$sender->sendMessage($this->getConfig()->get("self-success-gm0"));
					}
					
					if (isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						if($target === null || !$target->isOnline()) {
							$sender->sendMessage($this->getConfig()->get("not-found"));
							return false;
						}
					}
													
					if(isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						$tar_name = $target->getName();
						$send_name = $sender->getName();
				
						$target->setGamemode(0);
				
						$msg = $this->getConfig()->get("success-sender-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$sender->sendMessage($msg);
				
						$msg = $this->getConfig()->get("success-tar-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$target->sendMessage($msg);
					}
				
			} else {
				$sender->sendMessage($his->getConfig()->get("no-permission"));
			}
		} else {
			$sender->sendMessage($this->getConfig()->get("no-player"));
		}
		break;
		
			case "gm1":
			if($sender instanceof Player) {
				if($sender->hasPermission("sc.gm1")) {
			
					if(count($args) < 1) {
						$sender->setGamemode(1);
						$sender->sendMessage($this->getConfig()->get("self-success-gm1"));
					}
					
					if (isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						if($target === null || !$target->isOnline()) {
							$sender->sendMessage($this->getConfig()->get("not-found"));
							return false;
						}
					}
													
					if(isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						$tar_name = $target->getName();
						$send_name = $sender->getName();
				
						$target->setGamemode(1);
				
						$msg = $this->getConfig()->get("success-sender-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$sender->sendMessage($msg);
				
						$msg = $this->getConfig()->get("success-tar-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$target->sendMessage($msg);
					}
				
			} else {
				$sender->sendMessage($his->getConfig()->get("no-permission"));
			}
		} else {
			$sender->sendMessage($this->getConfig()->get("no-player"));
		}
		break;

			case "gm2":
			if($sender instanceof Player) {
				if($sender->hasPermission("sc.gm2")) {
					
					if(count($args) < 1) {
						$sender->setGamemode(2);
						$sender->sendMessage($this->getConfig()->get("self-success-gm2"));
					}
					
					if (isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						if($target === null || !$target->isOnline()) {
							$sender->sendMessage($this->getConfig()->get("not-found"));
							return false;
						}
					}
													
					if(isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						$tar_name = $target->getName();
						$send_name = $sender->getName();
				
						$target->setGamemode(2);
				
						$msg = $this->getConfig()->get("success-sender-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$sender->sendMessage($msg);
				
						$msg = $this->getConfig()->get("success-tar-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$target->sendMessage($msg);
					}
				
			} else {
				$sender->sendMessage($his->getConfig()->get("no-permission"));
			}
		} else {
			$sender->sendMessage($this->getConfig()->get("no-player"));
		}
		break;
		
			case "gm3":
			if($sender instanceof Player) {
				if($sender->hasPermission("sc.gm3")) {
			
					if(count($args) < 1) {
						$sender->setGamemode(3);
						$sender->sendMessage($this->getConfig()->get("self-success-gm3"));
					}
					
					if (isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						if($target === null || !$target->isOnline()) {
							$sender->sendMessage($this->getConfig()->get("not-found"));
							return false;
						}
					}
													
					if(isset($args[0])) {
						$target = $this->getServer()->getPlayer($args[0]);
						$tar_name = $target->getName();
						$send_name = $sender->getName();
				
						$target->setGamemode(3);
				
						$msg = $this->getConfig()->get("success-sender-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$sender->sendMessage($msg);
				
						$msg = $this->getConfig()->get("success-tar-mess");
						$msg = str_replace("%send_name", "$send_name", $msg);
						$msg = str_replace("%tar_name", "$tar_name", $msg);
						$target->sendMessage($msg);
					}
				
			} else {
				$sender->sendMessage($his->getConfig()->get("no-permission"));
			}
		} else {
			$sender->sendMessage($this->getConfig()->get("no-player"));
		}
		break;
	}
	return true;
	}
}
