GIT_HOOKS_DIR = etc/git-hooks

help: ## Prompts available commands
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: hooks ## Sets up the project

hooks: ## Installs git hooks
	@chmod +x $(GIT_HOOKS_DIR)/checks/*
	@chmod +x $(GIT_HOOKS_DIR)/pre-commit
	@ln -sf ../../$(GIT_HOOKS_DIR)/pre-commit .git/hooks/pre-commit

clear-cache: ## Clear Symfony Cache
	@php apps/rest-api/bin/console cache:clear

### --- 🧪 Testing 🧪 --- #
test: phpunit phpstan ## Run unit tests and code analysis

phpunit: ## Run phpunit tests
	@vendor/bin/phpunit

phpstan: ## Run phpstan code analysis
	@vendor/bin/phpstan analyse -c tests/phpstan.neon