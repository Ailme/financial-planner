<?php

namespace tests\modules\fin\entities\Wallet;

use app\modules\fin\entities\Wallet;
use app\modules\fin\entities\WalletId;
use app\modules\fin\entities\WalletStatus;
use Faker\Provider\Uuid;

/**
 * Class CreateTest
 *
 * @package app\tests\unit\entities\Wallet
 */
class CreateTest extends \Codeception\Test\Unit
{

    public function testSuccess()
    {
        $wallet = new Wallet(
            $id = new WalletId(Uuid::uuid()),
            $name = 'deposit card',
            $balance = 100
        );

        $wallet->setDescription($description = 'description');
        $wallet->setStatus(WalletStatus::ACTIVE());

        $this->assertEquals($id, $wallet->getId());
        $this->assertEquals($name, $wallet->getName());
        $this->assertEquals($description, $wallet->getDescription());
        $this->assertEquals($balance, $wallet->getBalance());
        $this->assertEquals($balance, $wallet->getInitialBalance());
        $this->assertEquals(WalletStatus::ACTIVE(), $wallet->getStatus());
        $this->assertNotNull($wallet->getCreatedDate());

        $this->assertTrue($wallet->isActive());
    }
}