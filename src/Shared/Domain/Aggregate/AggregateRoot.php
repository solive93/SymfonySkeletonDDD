<?php declare(strict_types=1);

namespace Company\Shared\Domain\Aggregate;

use Company\Shared\Domain\Bus\DomainEvent\DomainEvent;

abstract class AggregateRoot
{
    /**
     * @var DomainEvent[]
     */
    private array $domainEvents = [];

    /**
     * @return DomainEvent[]
     */
    final public function pullDomainEvents(): array
    {
        $domainEvents       = $this->domainEvents;
        $this->domainEvents = [];

        return $domainEvents;
    }

    final protected function recordThat(DomainEvent $domainEvent): void
    {
        $this->domainEvents[] = $domainEvent;
    }
}
