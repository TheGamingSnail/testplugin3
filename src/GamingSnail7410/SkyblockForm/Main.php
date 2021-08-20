<?php

namespace GamingSnail7410\ReportUI;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

   public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
       switch($cmd->getName()){
           case "isui":
            if($sender instanceof Player){
               $this->ui($sender);
            } else {
               $sender->sendMessage("you must be in game to run this command NERDDDDD");
            }
           break;
       }
   return true;
   }
   
   public function ui($player){
       $form =  $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $player, array $data = null){
              if($data === null){
                  return true;
              }
              switch($data)
              {
                  case 0:
                      $this->getServer->dispatchCommand($player, "is create");

                  break;

                  case 1:
                      $this->getServer->dispatchCommand($player, "is go");

                  break;

                  case 2:
                      $this->getServer->dispatchCommand($player, "is lock");

                  break;

                  case 3:
                      $this->getServer->dispatchCommand($player, "is leave");

                  break;

                  case 4:
                      $this->getServer->dispatchCommand($player, "is disband");

                  break;

                  case 5:
                      $this->getServer->dispatchCommand($player, "is setspawn");

                  break;
              }
          });
           $form->setTitle("SkyblockForm");
           $form->addContent("Select One OF The Buttons");
           $form->addButton("Create Island");
           $form->addButton("Teleport To Your Island");
           $form->addButton("Lock/Unlock Your Island");
           $form->addButton("Leave Your Island");
           $form->addButton("Disband Your Island");
           $form->addButton("Set Island Spawnpoint");
           $form->sendToPlayer($player);
           return $form;
      }

}