<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\WalletId;

/**
 * Class WalletChangedBalance
 *
 * @package app\modules\fin\events
 */
class WalletChangedBalance
{
    /**
     * @var WalletId
     */
    public $walletId;
    /**
     * @var string
     */
    public $balance;

    /**
     * WalletChangedDescription constructor.
     *
     * @param WalletId $walletId
     * @param float $balance
     */
    public function __construct(WalletId $walletId, float $balance)
    {
        $this->walletId = $walletId;
        $this->balance = $balance;
    }
}