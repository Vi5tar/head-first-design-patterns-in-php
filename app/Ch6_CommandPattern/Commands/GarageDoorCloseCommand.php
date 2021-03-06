<?php

namespace App\Ch6\Commands;

use App\Ch6\Interfaces\Command;
use App\Ch6\VendorClasses\GarageDoor;

class GarageDoorCloseCommand implements Command
{
    public GarageDoor $garageDoor;

    public function __construct(GarageDoor $garageDoor) {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->down();
    }

    public function undo(): void
    {
        $this->garageDoor->up();
    }
}