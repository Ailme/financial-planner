<?php

namespace app\tests\unit\modules\fin\entities\wallet;

use app\modules\fin\events\WalletChangedBalance;
use app\tests\unit\modules\fin\entities\WalletBuilder;
use Codeception\Test\Unit;

/**
 * Class UpdateBalanceTest
 *
 * @package app\tests\unit\modules\fin\entities\Wallet
 */
class UpdateBalanceTest extends Unit
{
    public function testSuccess()
    {
        $wallet = WalletBuilder::instance()->build();

        $oldBalance = $wallet->getBalance();
        $wallet->addBalance($balance = 200);
        $this->assertEquals($oldBalance + $balance, $wallet->getBalance());

        $this->assertNotEmpty($events = $wallet->releaseEvents());
        $this->assertInstanceOf(WalletChangedBalance::class, end($events));

        $oldBalance = $wallet->getBalance();
        $wallet->subBalance($balance = 20);
        $this->assertEquals($oldBalance - $balance, $wallet->getBalance());

        $this->assertNotEmpty($events = $wallet->releaseEvents());
        $this->assertInstanceOf(WalletChangedBalance::class, end($events));
    }
}