<?php

namespace app\modules\fin\entities;

/**
 * Class Wallet
 *
 * @package app\modules\fin\entities
 */
class Wallet
{
    /**
     * @var WalletId
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description = '';
    /**
     * @var float
     */
    private $initialBalance = 0;
    /**
     * @var float
     */
    private $balance = 0;
    /**
     * @var WalletStatus
     */
    private $status;
    /**
     * @var \DateTimeImmutable
     */
    private $createdDate;
    /**
     * @var \DateTimeImmutable
     */
    private $modifiedDate;

    /**
     * Wallet constructor.
     *
     * @param WalletId $id
     * @param string $name
     */
    public function __construct(WalletId $id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


    /**
     * @return WalletId
     */
    public function getId(): WalletId
    {
        return $this->id;
    }

    /**
     * @param WalletId $id
     */
    public function setId(WalletId $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getInitialBalance(): float
    {
        return $this->initialBalance;
    }

    /**
     * @param float $initialBalance
     */
    public function setInitialBalance(float $initialBalance)
    {
        $this->initialBalance = $initialBalance;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     */
    public function setBalance(float $balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return WalletStatus
     */
    public function getStatus(): WalletStatus
    {
        return $this->status;
    }

    /**
     * @param WalletStatus $status
     */
    public function setStatus(WalletStatus $status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedDate(): \DateTimeImmutable
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTimeImmutable $createdDate
     */
    public function setCreatedDate(\DateTimeImmutable $createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getModifiedDate(): \DateTimeImmutable
    {
        return $this->modifiedDate;
    }

    /**
     * @param \DateTimeImmutable $modifiedDate
     */
    public function setModifiedDate(\DateTimeImmutable $modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }
}