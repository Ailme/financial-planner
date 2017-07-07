<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\WalletId;

/**
 * Class WalletActived
 *
 * @package app\modules\fin\events
 */
class WalletActived
{
    /**
     * @var WalletId
     */
    public $walletId;

    /**
     * WalletActived constructor.
     *
     * @param WalletId $walletId
     */
    public function __construct(WalletId $walletId)
    {
        $this->walletId = $walletId;
    }
}