<?php

namespace app\entities;

/**
 * Class Id
 *
 * @package app\entities
 */
abstract class Id
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * Id constructor.
     *
     * @param null $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Id $other
     *
     * @return bool
     */
    public function isEqualTo(self $other)
    {
        return $this->getId() === $other->getId();
    }
}