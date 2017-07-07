<?php

namespace tests\modules\fin\entities\operation;

use app\modules\fin\entities\Operation;
use app\modules\fin\entities\OperationId;
use app\modules\fin\entities\OperationType;
use app\modules\fin\events\OperationCreated;
use app\tests\unit\modules\fin\entities\WalletBuilder;

/**
 * Class CreateTest
 *
 * @package app\tests\unit\entities\Operation
 */
class CreateTest extends \Codeception\Test\Unit
{

    public function testSuccess()
    {
        $wallet = WalletBuilder::instance()->build();

        $operation = new Operation(
            $id = new OperationId(1),
            $sum = 100,
            $type = OperationType::EXPENSE(),
            [$wallet]
        );

        $this->assertEquals($id, $operation->getId());
        $this->assertEquals($sum, $operation->getSum());
        $this->assertEquals($type, $operation->getType());
        $this->assertNotNull($operation->getCreatedTime());
        $this->assertInstanceOf(\DateTimeImmutable::class, $operation->getCreatedTime());

        $this->assertNotEmpty($wallets = $operation->getWallets());
        $this->assertEquals($wallet, end($wallets));

        $this->assertNotEmpty($events = $operation->releaseEvents());
        $this->assertInstanceOf(OperationCreated::class, end($events));
    }
}