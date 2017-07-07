<?php

namespace app\entities;

/**
 * Interface AggregateRoot
 *
 * @package app\entities
 */
interface AggregateRoot
{
    public function getId();

    public function releaseEvents();
}