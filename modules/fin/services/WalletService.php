<?php

namespace app\modules\fin\services;

use app\entities\Id;
use app\modules\fin\entities\Wallet;
use app\modules\fin\repositories\WalletRepositoryInterface;

/**
 * Class WalletService
 *
 * @package app\modules\fin\services
 */
class WalletService implements WalletServiceInterface
{
    /**
     * @var WalletRepositoryInterface
     */
    private $repository;

    /**
     * WalletService constructor.
     *
     * @param WalletRepositoryInterface $repository
     */
    public function __construct(WalletRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function get(Id $id)
    {
        // TODO: Implement get() method.
    }

    public function updateBalance(Wallet $wallet, float $value)
    {
        // TODO: Implement updateBalance() method.
    }
}