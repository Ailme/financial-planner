<?php

namespace app\modules\fin\entities;

use MabeEnum\Enum;

/**
 * Class WalletStatus
 *
 * @package app\modules\fin\entities
 */
class WalletStatus extends Enum
{
    const INACTIVE = 'i';
    const ACTIVE = 'a';
    const DELETED = 'd';
}