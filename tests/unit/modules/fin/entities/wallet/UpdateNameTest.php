<?php

namespace app\tests\unit\modules\fin\entities\wallet;

use app\modules\fin\events\WalletChangedName;
use app\tests\unit\modules\fin\entities\WalletBuilder;
use Codeception\Test\Unit;

/**
 * Class UpdateNameTest
 *
 * @package app\tests\unit\modules\fin\entities\Wallet
 */
class UpdateNameTest extends Unit
{
    public function testSuccess()
    {
        $wallet = WalletBuilder::instance()->build();
        $wallet->updateName($name = 'new name');

        $this->assertEquals($name, $wallet->getName());

        $this->assertNotEmpty($events = $wallet->releaseEvents());
        $this->assertInstanceOf(WalletChangedName::class, end($events));
    }
}