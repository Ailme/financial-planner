<?php

namespace app\modules\fin\events;

use app\modules\fin\entities\OperationId;

/**
 * Class OperationCreated
 *
 * @package app\modules\fin\events
 */
class OperationCreated
{
    /**
     * @var OperationId
     */
    public $operationId;

    /**
     * OperationCreated constructor.
     *
     * @param OperationId $operationId
     */
    public function __construct(OperationId $operationId)
    {
        $this->operationId = $operationId;
    }
}