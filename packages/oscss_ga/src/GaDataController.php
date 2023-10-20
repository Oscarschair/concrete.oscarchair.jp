<?php
namespace Concrete\Package\OscssGa\Src;

use Concrete\Core\Command\Task\Input\InputInterface;
use Concrete\Core\Command\Task\Runner\ProcessTaskRunner;
use Concrete\Core\Command\Task\Runner\TaskRunnerInterface;
use Concrete\Core\Command\Task\TaskInterface;
use Concrete\Core\Command\Task\Controller\AbstractController;
require_once __DIR__ . '/GetGaData.php';
// require_once __DIR__ . '/GetStaticsFromGaCommandHandler.php';
use Concrete\Package\OscssGa\Src\GetGaData;

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
    {//https://documentation.concretecms.org/api/dev-develop/Concrete/Core/Command/Task/Runner/ProcessTaskRunner.html
        $message = new GetGaData();
        return new ProcessTaskRunner($task, $message, $input, t('Process Started.'));
    }
}