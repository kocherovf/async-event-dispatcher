<?php

namespace Enqueue\AsyncEventDispatcher;

use Symfony\Component\EventDispatcher\Event;

class DummyAsyncEvent extends Event implements AsyncEvent
{
    /**
     * @var string
     */
    public $queueName = 'dummyQueue';

    /**
     * @return string
     */
    public function getQueueName()
    {
        return $this->queueName;
    }
}
