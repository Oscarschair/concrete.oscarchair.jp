<?php
namespace Concrete\Package\OscssGa;

//use Concrete\Package\OscssGa\Src\Getting\Command\GetStaticsFromGaCommand;
use Concrete\Core\Command\Task\Input\InputInterface;
use Concrete\Core\Command\Task\Runner\CommandTaskRunner;
use Concrete\Core\Command\Task\Runner\TaskRunnerInterface;
use Concrete\Core\Command\Task\TaskInterface;
use Concrete\Core\Command\Task\Controller\AbstractController;

defined('C5_EXECUTE') or die("Access Denied.");

class GaDataController extends AbstractController
{
    public function getName(): string
    {
        return t('Get Statics From Ga4');
    }

    public function getDescription(): string
    {
        return t('Get Statics From Ga4 and write in database.');
    }

    public function getTaskRunner(TaskInterface $task, InputInterface $input): TaskRunnerInterface
    {
        // Nothing here yet.        
    }

}