<?php

namespace app\entities;

/**
 * Trait EventTrait
 *
 * @package app\entities
 */
trait EventTrait
{
    private $events = [];

    /**
     * @param $event
     */
    protected function recordEvent($event)
    {
        $this->events[] = $event;
    }

    /**
     * @return array
     */
    public function releaseEvents()
    {
        $events = $this->events;
        $this->events = [];

        return $events;
    }
}