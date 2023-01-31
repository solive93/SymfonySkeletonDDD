<?php declare(strict_types=1);

namespace Company\Shared\Domain\Bus\DomainEvent;

interface EventBus
{
    public function publish(DomainEvent ...$domainEvent): void;
}