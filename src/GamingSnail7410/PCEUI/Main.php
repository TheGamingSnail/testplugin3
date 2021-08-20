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
          $this->getServer()->dispatchCommand($player, "ce enchant driller" . data[0]);
        break;

        case 1:
          $this->getServer()->dispatchCommand($player, "is join");
        break;

        case 2:
          $this->getServer()->dispatchCommand($player, "is lock");
        break;

        case 3:
          $this->visit($player);
        break;

        case 4:
          $this->getServer()->dispatchCommand($player, "is leave");
        break;

        case 5:
          $this->getServer()->dispatchCommand($player, "is disband");
        break;

        case 6:
          $this->kick($player);
        break;

        case 7:
          $this->promote($player);
        break;

        case 8:
          $this->getServer()->dispatchCommand($player, "is setspawn");
        break;

        case 9:
          $this->add($player);
        break;
      }
    });
    $form->setTitle("PCEUI");
    $form->addSlider("Driller", 0, 5);
    $form->addSlider("Teleport to your island", 1, 5);
    $form->addSlider("Lock/Unlock your island", 1, 5);
    $form->addSlider("Visit someone's island", 1, 5);
    $form->addSlider("Leave your island", 1, 5);
    $form->addSlider("Delete your island", 1, 5);
    $form->addSlider("Kick an island member", 1, 5);
    $form->addSlider("Promote an island member", 1, 5);
    $form->addSlider("Set your island spawn", 1, 5);
    $form->addSlider("Add an island member", 1, 5);
    $form->sendToPlayer($player);
    return $form;
  }

}
