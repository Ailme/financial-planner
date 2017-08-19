<?php

namespace app\modules\fin\entities;

use app\entities\AggregateRoot;
use app\entities\EventTrait;
use app\modules\fin\events;

/**
 * Class Wallet
 *
 * @package app\modules\fin\entities
 */
class Wallet implements AggregateRoot
{
    use EventTrait;

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
    private $createdTime;
    /**
     * @var \DateTimeImmutable
     */
    private $modifiedTime;

    /**
     * Wallet constructor.
     *
     * @param WalletId $id
     * @param string $name
     * @param float $initialBalance
     * @param string $description
     */
    public function __construct(WalletId $id, string $name, float $initialBalance, string $description = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->initialBalance = $initialBalance;
        $this->balance = $initialBalance;

        $this->createdTime = new \DateTimeImmutable();
        $this->modifiedTime = new \DateTimeImmutable();
        $this->status = WalletStatus::ACTIVE();
        $this->description = $description;

        $this->recordEvent(new events\WalletCreated($this->id));
    }

    /**
     * @return WalletId
     */
    public function getId(): WalletId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getInitialBalance(): float
    {
        return $this->initialBalance;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return WalletStatus
     */
    public function getStatus(): WalletStatus
    {
        return $this->status;
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
     * @return bool
     */
    public function isActive()
    {
        return $this->status === WalletStatus::ACTIVE();
    }

    /**
     * @return bool
     */
    public function isDisable()
    {
        return $this->status === WalletStatus::INACTIVE();
    }

    /**
     * @return bool
     */
    public function isRemoved()
    {
        return $this->status === WalletStatus::REMOVED();
    }

    /**
     * @return $this
     */
    public function active()
    {
        if ($this->isActive()) {
            throw new \DomainException('Wallet is already active.');
        }

        $this->status = WalletStatus::ACTIVE();
        $this->modifiedTime = new \DateTimeImmutable();

        $this->recordEvent(new events\WalletActived($this->id));

        return $this;
    }

    /**
     * @return $this
     */
    public function disable()
    {
        if ($this->isDisable()) {
            throw new \DomainException('Wallet is already inactive.');
        }

        $this->status = WalletStatus::INACTIVE();
        $this->modifiedTime = new \DateTimeImmutable();

        $this->recordEvent(new events\WalletInactived($this->id));

        return $this;
    }

    /**
     * @return $this
     */
    public function remove()
    {
        if ($this->isRemoved()) {
            throw new \DomainException('Wallet is already removed.');
        }

        $this->status = WalletStatus::REMOVED();
        $this->modifiedTime = new \DateTimeImmutable();

        $this->recordEvent(new events\WalletRemoved($this->id));

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function updateName(string $name)
    {
        $this->name = $name;
        $this->modifiedTime = new \DateTimeImmutable();

        $this->recordEvent(new events\WalletChangedName($this->id, $this->name));

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function updateDescription(string $description)
    {
        $this->description = $description;
        $this->modifiedTime = new \DateTimeImmutable();

        $this->recordEvent(new events\WalletChangedDescription($this->id, $this->description));

        return $this;
    }

    /**
     * @param float $balance
     *
     * @return $this
     */
    public function addBalance(float $balance)
    {
        $this->balance += $balance;
        $this->modifiedTime = new \DateTimeImmutable();

        $this->recordEvent(new events\WalletChangedBalance($this->id, $this->balance));

        return $this;
    }

    /**
     * @param float $balance
     *
     * @return $this
     */
    public function subBalance(float $balance)
    {
        $this->balance -= $balance;
        $this->modifiedTime = new \DateTimeImmutable();

        $this->recordEvent(new events\WalletChangedBalance($this->id, $this->balance));

        return $this;
    }
}