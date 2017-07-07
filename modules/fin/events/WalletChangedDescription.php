<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\WalletId;

/**
 * Class WalletChangedDescription
 *
 * @package app\modules\fin\events
 */
class WalletChangedDescription
{
    /**
     * @var WalletId
     */
    public $walletId;
    /**
     * @var string
     */
    public $description;

    /**
     * WalletChangedDescription constructor.
     *
     * @param WalletId $walletId
     * @param string $description
     */
    public function __construct(WalletId $walletId, $description)
    {
        $this->walletId = $walletId;
        $this->description = $description;
    }
}