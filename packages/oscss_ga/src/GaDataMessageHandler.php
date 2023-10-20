<?php
namespace Concrete\Package\OscssGa\Src;

defined('C5_EXECUTE') or die("Access Denied.");

class GaDataMessageHandler
{
    public function __invoke(GaDataMessage $command)
    {
        DatabaseHandler::clearAll();
    }
}