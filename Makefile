GIT_HOOKS_DIR = etc/git-hooks

help: ## Prompts available commands
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: hooks ## Sets up the project

hooks: ## Installs git hooks
	@chmod +x $(GIT_HOOKS_DIR)/checks/*
	@chmod +x $(GIT_HOOKS_DIR)/pre-commit
	@ln -sf ../../$(GIT_HOOKS_DIR)/pre-commit .git/hooks/pre-commit