<?php

namespace GamingSnail7410\PCEUI;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase 
{

  public function onEnable()
  {

  }

  public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool 
  {

    switch($cmd->getName())
    {
      case "ceui":
       if($sender instanceof Player)
       {
        $this->ui($sender);
       }
    }
  return true;
  }

  public function ui($player)
  {
    $form = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createCustomForm(function (Player $player, int $data = null){
      if($data === null)
      {
        return true;
      }
      switch($data)
      {
        case 0:
          $this->getServer()->dispatchCommand($player, ""ce enchant driller" . data[0]");
        break;

        case 1:
          $this->getServer()->dispatchCommand($player, ""ce enchant luckycharm" . data[0]");
        break;
      }
    });
    $form->setTitle("PCEUI");
    $form->addSlider("Driller", 0, 5);
    $form->addSlider("Lucky Charm", 0, 5);
    $form->sendToPlayer($player);
    return $form;
  }

}
