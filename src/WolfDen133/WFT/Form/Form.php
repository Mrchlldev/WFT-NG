<?php

namespace WolfDen133\WFT\Form;

use pocketmine\player\Player;
use dktapps\pmforms\CustomFormResponse;
use WolfDen133\WFT\Texts\FloatingText;

class Form
{
    public function sendTo (Player $player, FloatingText $floatingText = null) : void {}
    public function handleResponse(Player $player, CustomFormResponse|int $data): void {}
}