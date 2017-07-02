<?php

namespace app\modules\fin\entities;

use MabeEnum\Enum;

/**
 * Class OperationType
 *
 * @package app\modules\fin\entities
 */
class OperationType extends Enum
{
    const INCOME = 'i';
    const EXPENSE = 'e';
    const MOVE = 'm';
}