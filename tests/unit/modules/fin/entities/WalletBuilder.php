<?php

namespace app\tests\unit\modules\fin\entities;

use app\modules\fin\entities\Wallet;
use app\modules\fin\entities\WalletId;
use Faker\Factory;

/**
 * Class WalletBuilder
 *
 * @package app\tests\unit\modules\fin\entities
 */
class WalletBuilder
{
    /**
     * WalletBuilder constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return WalletBuilder
     */
    public static function instance()
    {
        return new self();
    }

    /**
     * @return Wallet
     */
    public function build()
    {
        $faker = Factory::create();

        $wallet = new Wallet(
            new WalletId($faker->randomDigit),
            $faker->name,
            $faker->randomFloat(),
            $faker->text
        );

        return $wallet;
    }
}