.PHONY: setup dev test lint migrate seed package

setup:
	composer install
	cp .env.example .env
	php artisan key:generate
	php artisan migrate

dev:
	php artisan serve

test:
	vendor/bin/phpunit

lint:
	vendor/bin/phpcs --standard=PSR12 app/

migrate:
	php artisan migrate

seed:
	php artisan db:seed

package:
	zip -r ome-admin-panel_$(shell date +%F)_0.1.0.zip . -x vendor/* node_modules/*
	@echo "SHA256: $$(sha256sum ome-admin-panel_$(shell date +%F)_0.1.0.zip)"
