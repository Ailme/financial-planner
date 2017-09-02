<?php

return [
    'definitions' => [
        \app\modules\fin\services\WalletServiceInterface::class => 'app\modules\fin\services\WalletService',
        \app\modules\fin\repositories\WalletRepositoryInterface::class => 'app\modules\fin\repositories\SqlWalletRepository',
    ],
    'singletons' => [
        // Dependency Injection Container singletons configuration
    ],
];
