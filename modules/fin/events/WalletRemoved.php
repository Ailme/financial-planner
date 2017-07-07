<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\WalletId;

/**
 * Class WalletRemoved
 *
 * @package app\modules\fin\events
 */
class WalletRemoved
{
    /**
     * @var WalletId
     */
    public $walletId;

    /**
     * WalletRemoved constructor.
     *
     * @param WalletId $walletId
     */
    public function __construct(WalletId $walletId)
    {
        $this->walletId = $walletId;
    }
}