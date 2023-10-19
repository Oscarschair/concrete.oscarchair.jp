<?php
namespace Concrete\Package\OscssGa4;

// use Concrete\Package\OscssGa4\Src\Getting\Command\GetStaticsFromGa4Command;
// use Concrete\Core\Command\Task\Input\InputInterface;
// use Concrete\Core\Command\Task\Runner\TaskRunnerInterface;
// use Concrete\Core\Command\Task\TaskInterface;
// use Concrete\Core\Command\Task\Controller\AbstractController;
// use Concrete\Core\Command\Task\Runner\CommandTaskRunner;


defined('C5_EXECUTE') or die("Access Denied.");

class GetStaticsFromGa4Controller //extends AbstractController
{

    public function getName(): string
    {
        return t('Get Statics From Ga4');
    }

    public function getDescription(): string
    {
        return t('Get Statics From Ga4 and write in database.');
    }

//     public function getTaskRunner(TaskInterface $task, InputInterface $input): TaskRunnerInterface
//     {
// //        $command = new GetStaticsFromGa4Command();
// //        return new CommandTaskRunner($task, $command, t('Success.'));
//     }

}