<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\WalletId;

/**
 * Class WalletChangedName
 *
 * @package app\modules\fin\events
 */
class WalletChangedName
{
    /**
     * @var WalletId
     */
    public $walletId;
    /**
     * @var string
     */
    public $name;

    /**
     * WalletChangedDescription constructor.
     *
     * @param WalletId $walletId
     * @param string $name
     */
    public function __construct(WalletId $walletId, $name)
    {
        $this->walletId = $walletId;
        $this->name = $name;
    }
}