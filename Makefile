DOCKER_COMPOSE?=docker-compose
EXEC?=$(DOCKER_COMPOSE) exec php-fpm-nginx
COMPOSER=$(EXEC) composer
CONSOLE=bin/console

init: 													## Start all containers
	$(DOCKER_COMPOSE) up -d
	$(COMPOSER) install
	$(EXEC) php bin/console doctrine:schema:update --force
	$(EXEC) php bin/console hautelook:fixtures:load

sh:														## Run shell inside php container
	$(EXEC) sh

### Symfony commands

cache-clear: 											## Clean cache
	$(EXEC) rm -rf var/cache/*