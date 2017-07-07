<?php

namespace app\modules\fin\services;

use app\entities\Id;
use app\modules\fin\entities\Wallet;

/**
 * Interface WalletServiceInterface
 *
 * @package app\modules\fin\services
 */
interface WalletServiceInterface
{
    /**
     * @param Id $id
     *
     * @return Wallet|null
     */
    public function get(Id $id);

    /**
     * @param Wallet $wallet
     * @param float $value
     *
     * @return Wallet
     */
    public function updateBalance(Wallet $wallet, float $value);
}