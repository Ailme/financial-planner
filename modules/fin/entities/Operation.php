<?php

namespace app\modules\fin\entities;

/**
 * Class Operation
 *
 * @package app\modules\fin\entities
 */
class Operation
{
    /**
     * @var OperationTypeId
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
    private $amount = 0;
    /**
     * @var OperationType
     */
    private $type;
    /**
     * @var Wallet
     */
    private $walletFrom;
    /**
     * @var Wallet
     */
    private $walletTo;

    /**
     * Operation constructor.
     *
     * @param OperationTypeId $id
     * @param \DateTimeImmutable $createdTime
     * @param float $amount
     * @param OperationType $type
     * @param Wallet $walletFrom
     */
    public function __construct(
        OperationTypeId $id,
        OperationType $type,
        Wallet $walletFrom,
        $amount,
        \DateTimeImmutable $createdTime
    ) {
        $this->id = $id;
        $this->createdTime = $createdTime;
        $this->amount = $amount;
        $this->type = $type;
        $this->walletFrom = $walletFrom;
    }

    /**
     * @return OperationTypeId
     */
    public function getId(): OperationTypeId
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
     * @param \DateTimeImmutable $createdTime
     */
    public function setCreatedTime(\DateTimeImmutable $createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * @param \DateTimeImmutable|null $modifiedTime
     */
    public function setModifiedTime($modifiedTime)
    {
        $this->modifiedTime = $modifiedTime;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return OperationType
     */
    public function getType(): OperationType
    {
        return $this->type;
    }

    /**
     * @param OperationType $type
     */
    public function setType(OperationType $type)
    {
        $this->type = $type;
    }

    /**
     * @return Wallet
     */
    public function getWalletFrom(): Wallet
    {
        return $this->walletFrom;
    }

    /**
     * @param Wallet $walletFrom
     */
    public function setWalletFrom(Wallet $walletFrom)
    {
        $this->walletFrom = $walletFrom;
    }

    /**
     * @return Wallet
     */
    public function getWalletTo(): Wallet
    {
        return $this->walletTo;
    }

    /**
     * @param Wallet $walletTo
     */
    public function setWalletTo(Wallet $walletTo)
    {
        $this->walletTo = $walletTo;
    }
}