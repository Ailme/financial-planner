<?php

namespace app\tests\unit\modules\fin\entities\wallet;

use app\modules\fin\events\WalletChangedDescription;
use app\tests\unit\modules\fin\entities\WalletBuilder;
use Codeception\Test\Unit;

/**
 * Class UpdateDescriptionTest
 *
 * @package app\tests\unit\modules\fin\entities\Wallet
 */
class UpdateDescriptionTest extends Unit
{
    public function testSuccess()
    {
        $wallet = WalletBuilder::instance()->build();
        $wallet->updateDescription($description = 'new description');

        $this->assertEquals($description, $wallet->getDescription());

        $this->assertNotEmpty($events = $wallet->releaseEvents());
        $this->assertInstanceOf(WalletChangedDescription::class, end($events));
    }
}