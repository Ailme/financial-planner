<?php

namespace app\tests\modules\fin\entities\wallet;

use app\modules\fin\entities\Wallet;
use app\modules\fin\entities\WalletId;
use app\modules\fin\entities\WalletStatus;
use app\modules\fin\events\WalletCreated;
use Codeception\Test\Unit;

/**
 * Class CreateTest
 *
 * @package app\tests\unit\entities\Wallet
 */
class CreateTest extends Unit
{

    public function testSuccess()
    {
        $wallet = new Wallet(
            $id = new WalletId(1),
            $name = 'deposit card',
            $balance = 100,
            $description = 'wallet description'
        );

        $this->assertEquals($id, $wallet->getId());
        $this->assertEquals($name, $wallet->getName());
        $this->assertEquals($balance, $wallet->getBalance());
        $this->assertEquals($balance, $wallet->getInitialBalance());
        $this->assertEquals($description, $wallet->getDescription());
        $this->assertEquals(WalletStatus::ACTIVE(), $wallet->getStatus());
        $this->assertTrue($wallet->isActive());
        $this->assertNotNull($wallet->getCreatedTime());
        $this->assertInstanceOf(\DateTimeImmutable::class, $wallet->getCreatedTime());

        $this->assertNotEmpty($events = $wallet->releaseEvents());
        $this->assertInstanceOf(WalletCreated::class, end($events));
    }
}