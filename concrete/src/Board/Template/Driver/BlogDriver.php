<?php
namespace Concrete\Core\Board\Template\Driver;

use Concrete\Core\Board\Layout\PlannerInterface;
use Concrete\Core\Board\Layout\SlotLayoutPlanner;

defined('C5_EXECUTE') or die("Access Denied.");

class BlogDriver implements DriverInterface
{

    public function getTotalSlots(): int
    {
        return 5;
    }

    public function getLayoutPlanner(): ?PlannerInterface
    {
        echo '<script>';
        echo 'console.log("iam here : 2")';
        echo '</script>';
        return new SlotLayoutPlanner([
            '1' => ['blog_image_left']
        ]);
    }


}
