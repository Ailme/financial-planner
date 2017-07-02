<?php

namespace app\modules\fin\services;

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

    public function get($id)
    {
        // TODO: Implement get() method.
    }

}