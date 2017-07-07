<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\WalletId;

/**
 * Class WalletInactived
 *
 * @package app\modules\fin\events
 */
class WalletInactived
{
    /**
     * @var WalletId
     */
    public $walletId;

    /**
     * WalletInactived constructor.
     *
     * @param WalletId $walletId
     */
    public function __construct(WalletId $walletId)
    {
        $this->walletId = $walletId;
    }
}