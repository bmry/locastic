DOCKER_COMPOSE?=docker-compose
EXEC?=$(DOCKER_COMPOSE) exec php-fpm-nginx
COMPOSER=$(EXEC) composer
CONSOLE=bin/console

.DEFAULT_GOAL := help
.PHONY: help install up stop ps sh logs cache-clear create-symfony-api create-symfony-website orm maker entity controller git

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

vendor: composer.json
	$(COMPOSER) install

composer.lock:
	$(COMPOSER) update

create-git:
	rm -rf .git/ && git init

install: up vendor composer.lock 						## Install composer dependencies

### Docker commands

up: 													## Start all containers
	$(DOCKER_COMPOSE) up -d

ps:														## List all containers
	$(DOCKER_COMPOSE) ps

stop:													## Stop all containers
	$(DOCKER_COMPOSE) stop

stop-all:											    ## Stop all containers on your machine
	docker stop $(docker ps -q)

down:													## Stop and remove all containers, volumes and networks
	$(DOCKER_COMPOSE) down

rm:														## Remove all stopped containers, volumes and networks
	$(DOCKER_COMPOSE) rm

sh:														## Run shell inside php container
	$(EXEC) sh

### Symfony commands

create-symfony-skeleton: up								## Create symfony api
	$(EXEC) rm -rf tmp/ && $(COMPOSER) create-project symfony/skeleton tmp/ 5.* -vvv
	$(EXEC) mv tmp/[a-zA-Z0-9.]* . && $(EXEC) find tmp/ -name ".*" -mindepth 1 -maxdepth 1 -exec mv {} . \;
	$(EXEC) rm -rf tmp/ && rm -rf .git/ && git init

create-symfony-website:	up							    ## Create symfony website
	$(EXEC) rm -rf tmp/ && $(COMPOSER) create-project symfony/website-skeleton tmp/ 5.* -vvv
	$(EXEC) mv tmp/[a-zA-Z0-9.]* . && $(EXEC) find tmp/ -name ".*" -mindepth 1 -maxdepth 1 -exec mv {} . \;
	$(EXEC) rm -rf tmp/ && rm -rf .git/ && git init

orm: 													## Install symfony/orm-pack
	$(EXEC) composer require symfony/orm-pack -vvv

maker: 													## Install symfony/maker-bundle
	$(EXEC) composer require --dev symfony/maker-bundle

api-platform:											## Install api-platform/api-pack
	$(EXEC) composer require api-platform/api-pack -vvv

entity: 												## Create symfony entity
	$(EXEC) php bin/console make:entity

controller:												## Create symfony controller
	$(EXEC) php bin/console make:controller

logs: 													## Show logs
	$(EXEC) tail -f var/logs/dev.log

cache-clear: 											## Clean cache
	$(EXEC) rm -rf var/cache/*

### Database commands

db-create:												## Create database
	$(EXEC) php bin/console doctrine:database:create

db-diff:												## Generate migration
	$(EXEC) php bin/console doctrine:migrations:diff

db-migration:											## Create migration
	$(EXEC) php bin/console make:migration

db-migrate: 											## Run migrations
	$(EXEC) php bin/console doctrine:migrations:migrate
