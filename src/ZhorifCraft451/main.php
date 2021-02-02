<?php

namespace ZhorifCraft451;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use pocketmine\item\Item;

use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;

class main extends PluginBase implements Listener {

    public function onEnable(){

    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {

        switch($cmd->getName()){
            case "pack":
             if($sender instanceof Player){
                if(!isset($args[0])){
                    $sender->sendMessage("§bUsage: /pack [pack name]");
                    return true;
                } else {
                    switch(strtolower($args[0])){
                        case "uncommon":
                         if(!$sender->hasPermission("uncommon.pack.use")) {
                             $sender->sendMessage("§l§fYou Doesn't have a permission to use this command");
                             break;
                            }
                         
                         $sword = Item::get(267, 0, 1);
                         $helmet = Item::get(306, 0, 1);
                         $chestplate = Item::get(307, 0, 1);
                         $leggings = Item::get(308, 0, 1);
                         $boots = Item::get(309, 0, 1);
                         $sender->getInventory()->clearAll();
                         $sender->getArmorInventory()->clearAll();
                         $sender->getInventory()->addItem($sword);
                         $sender->getArmorInventory()->setHelmet($helmet);
                         $sender->getArmorInventory()->setChestplate($chestplate);
                         $sender->getArmorInventory()->setLeggings($leggings);
                         $sender->getArmorInventory()->setBoots($boots);
                         $sender->sendMessage("§l§fYou Has been choosen UnCommon Pack");
                         break;
                        case "rare":
                         if(!$sender->hasPermission("rare.pack.use")) {
                             $sender->sendMessage("§l§bYou Doesn't have a permission to use this command");
                             break;
                            }
    
                         $sword = Item::get(276, 0, 1);
                         $helmet = Item::get(310, 0, 1);
                         $chestplate = Item::get(311, 0, 1);
                         $leggings = Item::get(312, 0, 1);
                         $boots = Item::get(313, 0, 1);
                         $sender->getInventory()->clearAll();
                         $sender->getArmorInventory()->clearAll();
                         $sender->getInventory()->addItem($sword);
                         $sender->getArmorInventory()->setHelmet($helmet);
                         $sender->getArmorInventory()->setChestplate($chestplate);
                         $sender->getArmorInventory()->setLeggings($leggings);
                         $sender->getArmorInventory()->setBoots($boots);
                         $sender->sendMessage("§l§cYou has been choosen Rare Pack");
                         break;
                        case "legends":
                         if(!$sender->hasPermission("legends.pack.use")) {
                             $sender->sendMessage("§l§bYou Doesn't have a permission to use this command");
                             break;
                            }
                
                         $fire_aspect = Enchantment::getEnchantment(13);
                         $fire_aspect_ins = new EnchantmentInstance($fire_aspect, 2);
                         $protection = Enchantment::getEnchantment(0);
                         $protection_ins = new EnchantmentInstance($protection, 4);
                         $sword = Item::get(276, 0, 1);
                         $sword->addEnchantment($fire_aspect_ins);
                         $helmet = Item::get(310, 0, 1);
                         $helmet->addEnchantment($protection_ins);
                         $chestplate = Item::get(311, 0, 1);
                         $chestplate->addEnchantment($protection_ins);
                         $leggings = Item::get(312, 0, 1);
                         $leggings->addEnchantment($protection_ins);
                         $boots = Item::get(313, 0, 1);
                         $boots->addEnchantment($protection_ins);
                         $sender->getInventory()->clearAll();
                         $sender->getArmorInventory()->clearAll();
                         $sender->getInventory()->addItem($sword);
                         $sender->getArmorInventory()->setHelmet($helmet);
                         $sender->getArmorInventory()->setChestplate($chestplate);
                         $sender->getArmorInventory()->setLeggings($leggings);
                         $sender->getArmorInventory()->setBoots($boots);
                         $sender->sendMessage("§l§bYou has been choosen Legends Pack");
                         break;
                        case "epic":
                         if(!$sender->hasPermission("epic.pack.use")) {
                             $sender->sendMessage("§l§bYou Doesn't have a permission to use this command");
                             break;
                            }

                         $sharpness = Enchantment::getEnchantment(9);
                         $sharpnessins = new EnchantmentInstance($sharpness, 5);
                         $fire_aspect = Enchantment::getEnchantment(13);
                         $fire_aspect_ins = new EnchantmentInstance($fire_aspect, 2);
                         $protection = Enchantment::getEnchantment(0);
                         $protection_ins = new EnchantmentInstance($protection, 5);
                         $thorn = Enchantment::getEnchantment(5);
                         $thornins = new EnchantmentInstance($thorn, 5);
                         $sword = Item::get(276, 0, 1);
                         $sword->addEnchantment($fire_aspect_ins);
                         $sword->addEnchantment($sharpnessins);
                         $helmet = Item::get(310, 0, 1);
                         $helmet->addEnchantment($protection_ins);
                         $helmet->addEnchantment($thornins);
                         $chestplate = Item::get(311, 0, 1);
                         $chestplate->addEnchantment($protection_ins);
                         $chestplate->addEnchantment($thornins);
                         $leggings = Item::get(312, 0, 1);
                         $leggings->addEnchantment($protection_ins);
                         $leggings->addEnchantment($thornins);
                         $boots = Item::get(313, 0, 1);
                         $boots->addEnchantment($protection_ins);
                         $boots->addEnchantment($thornins);
                         $sender->getInventory()->clearAll();
                         $sender->getArmorInventory()->clearAll();
                         $sender->getInventory()->addItem($sword);
                         $sender->getArmorInventory()->setHelmet($helmet);
                         $sender->getArmorInventory()->setChestplate($chestplate);
                         $sender->getArmorInventory()->setLeggings($leggings);
                         $sender->getArmorInventory()->setBoots($boots);
                         $sender->sendMessage("§l§5You has been choosen Epic Pack");
                         break;
                        case "veteran":
                         if(!$sender->hasPermission("veteran.pack.use")) {
                             $sender->sendMessage("§l§dYou Doesn't have a permission to use this command");
                             break;
                            }

                         $fire_protection = Enchantment::getEnchantment(1);
                         $fire_protection_ins = new EnchantmentInstance($fire_protection, 5);
                         $sharpness = Enchantment::getEnchantment(9);
                         $sharpnessins = new EnchantmentInstance($sharpness, 5);
                         $fire_aspect = Enchantment::getEnchantment(13);
                         $fire_aspect_ins = new EnchantmentInstance($fire_aspect, 2);
                         $protection = Enchantment::getEnchantment(0);
                         $protection_ins = new EnchantmentInstance($protection, 5);
                         $thorn = Enchantment::getEnchantment(5);
                         $thornins = new EnchantmentInstance($thorn, 5);
                         $sword = Item::get(276, 0, 1);
                         $sword->addEnchantment($fire_aspect_ins);
                         $sword->addEnchantment($sharpnessins);
                         $helmet = Item::get(310, 0, 1);
                         $helmet->addEnchantment($protection_ins);
                         $helmet->addEnchantment($fire_protection_ins);
                         $helmet->addEnchantment($thornins);
                         $chestplate = Item::get(311, 0, 1);
                         $chestplate->addEnchantment($protection_ins);
                         $chestplate->addEnchantment($fire_protection_ins);
                         $chestplate->addEnchantment($thornins);
                         $leggings = Item::get(312, 0, 1);
                         $leggings->addEnchantment($protection_ins);
                         $leggings->addEnchantment($fire_protection_ins);
                         $leggings->addEnchantment($thornins);
                         $boots = Item::get(313, 0, 1);
                         $boots->addEnchantment($protection_ins);
                         $boots->addEnchantment($fire_protection_ins);
                         $boots->addEnchantment($thornins);
                         $sender->getInventory()->clearAll();
                         $sender->getArmorInventory()->clearAll();
                         $sender->getInventory()->addItem($sword);
                         $sender->getArmorInventory()->setHelmet($helmet);
                         $sender->getArmorInventory()->setChestplate($chestplate);
                         $sender->getArmorInventory()->setLeggings($leggings);
                         $sender->getArmorInventory()->setBoots($boots);
                         $sender->sendMessage("§l§aYou has been choosen Veteran Pack");
                         break;
                        case "common":
                         if(!$sender->hasPermission("common.pack.use")) {
                             $sender->sendMessage("§l§bYou Doesn't have a permission to use this command");
                             break;
                            }
                            
                         $sword = Item::get(267, 0, 1);
                         $helmet = Item::get(302, 0, 1);
                         $chestplate = Item::get(303, 0, 1);
                         $leggings = Item::get(304, 0, 1);
                         $boots = Item::get(305, 0, 1);
                         $sender->getInventory()->clearAll();
                         $sender->getArmorInventory()->clearAll();
                         $sender->getInventory()->addItem($sword);
                         $sender->getArmorInventory()->setHelmet($helmet);
                         $sender->getArmorInventory()->setChestplate($chestplate);
                         $sender->getArmorInventory()->setLeggings($leggings);
                         $sender->getArmorInventory()->setBoots($boots);
                         $sender->sendMessage("§l§7You has been choosen Common pack");
                         break;
                    } 
                }
             }
        }
    return true;
    }
}
