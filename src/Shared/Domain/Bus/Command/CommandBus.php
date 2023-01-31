<?php declare(strict_types=1);

namespace Company\Shared\Domain\Bus\Command;

interface CommandBus
{
    public function handle(Command $command): void;
}