<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\WalletId;

/**
 * Class WalletCreated
 *
 * @package app\modules\fin\events
 */
class WalletCreated
{
    /**
     * @var WalletId
     */
    public $walletId;

    /**
     * WalletCreated constructor.
     *
     * @param WalletId $walletId
     */
    public function __construct(WalletId $walletId)
    {
        $this->walletId = $walletId;
    }
}