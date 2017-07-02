<?php

namespace app\modules\fin\services;

/**
 * Interface WalletServiceInterface
 *
 * @package app\modules\fin\services
 */
interface WalletServiceInterface
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public function get($id);
}