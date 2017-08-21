install:
	@echo "Установка зависимостей composer"
	@composer install -n

update_messages:
	@echo "Update messages for App"
	@php yii message @app/config/message.php
	@echo "Update messages for Admin module"
	@php yii message @app/modules/admin/config/message.php
	@echo "Update messages for Main module"
	@php yii message @app/modules/main/config/message.php
	@echo "Update messages for User module"
	@php yii message @app/modules/user/config/message.php

migrate:
	@echo "Запуск миграций"
	@php yii migrate --interactive=0 --migrationPath=@app/modules/user/migrations

test:
	@echo "Запуск тестов"
	@php vendor/codeception/codeception/codecept run

test_migrate:
	@echo "Установка миграций для тестов"
	@php tests/bin/yii migrate --interactive=0
