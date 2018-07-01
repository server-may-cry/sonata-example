vendor: composer.json composer.lock
	composer validate
	composer install

.PHONY: test
test: vendor
	bin/console --version # test that container are compilable
	bin/console lint:yaml config
	vendor/bin/php-cs-fixer fix --dry-run
	vendor/bin/phpstan analyse src --configuration=phpstan.neon
	bin/phpunit

.PHONY: fix-cs
fix-cs: vendor
	vendor/bin/php-cs-fixer fix

.PHONY: web-server
web-server: vendor
	bin/console server:run

.PHONY: db
db: vendor
	bin/console doctrine:schema:create
