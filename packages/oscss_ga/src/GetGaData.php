<?php
namespace Concrete\Package\OscssGa\Src;

defined('C5_EXECUTE') or die("Access Denied.");

class GetGaData
{
    //Analytics Data API Overview
    //https://developers.google.com/analytics/devguides/reporting/data/v1
    
    /**
     * @var object
     */
    protected $message;

    /**
     * @var string
     */
    protected $processStartedMessage;

    /**
     * @var TaskInterface
     */
    protected $task;

    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var Process
     */
    protected $process;

    public function __construct(
        TaskInterface $task,
        object $message,
        InputInterface $input,
        string $processStartedMessage
    ) {
        $this->task = $task;
        $this->message = $message;
        $this->processStartedMessage = $processStartedMessage;
        $this->input = $input;
    }
}