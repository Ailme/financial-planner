<?php

namespace app\modules\fin\entities;

use app\entities\AggregateRoot;
use app\entities\EventTrait;
use app\modules\fin\events;

/**
 * Class Operation
 *
 * @package app\modules\fin\entities
 */
class Operation implements AggregateRoot
{
    use EventTrait;

    /**
     * @var OperationId
     */
    private $id;
    /**
     * @var \DateTimeImmutable
     */
    private $createdTime;
    /**
     * @var \DateTimeImmutable|null
     */
    private $modifiedTime;
    /**
     * @var float
     */
    private $sum = 0;
    /**
     * @var OperationType
     */
    private $type;
    /**
     * @var Wallet[]
     */
    private $wallets;

    /**
     * Operation constructor.
     *
     * @param OperationId $id
     * @param float $sum
     * @param OperationType $type
     * @param Wallet[] $wallets
     */
    public function __construct(OperationId $id, float $sum, OperationType $type, array $wallets)
    {
        $this->id = $id;
        $this->createdTime = new \DateTimeImmutable();
        $this->modifiedTime = new \DateTimeImmutable();
        $this->sum = $sum;
        $this->type = $type;
        $this->wallets = $wallets;

        $this->recordEvent(new events\OperationCreated($this->id));
    }

    /**
     * @return OperationId
     */
    public function getId(): OperationId
    {
        return $this->id;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedTime(): \DateTimeImmutable
    {
        return $this->createdTime;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @return OperationType
     */
    public function getType(): OperationType
    {
        return $this->type;
    }

    /**
     * @return Wallet[]
     */
    public function getWallets(): array
    {
        return $this->wallets;
    }

}