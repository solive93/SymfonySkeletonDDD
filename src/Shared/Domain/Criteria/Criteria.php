<?php declare(strict_types = 1);

namespace Company\Shared\Domain\Criteria;

final class Criteria
{
    public function __construct(
        private readonly Filters $filters,
        private readonly Order $order,
        private readonly ?Paginator $paginator = null
    ) {}

    public function hasFilters(): bool
    {
        return $this->filters->count() > 0;
    }

    public function hasOrder(): bool
    {
        return !$this->order->isNone();
    }

    public function hasPaginator(): bool
    {
        return $this->paginator !== null;
    }

    /**
     * @return Filter[]
     */
    public function plainFilters(): array
    {
        return $this->filters->filters();
    }

    public function filters(): Filters
    {
        return $this->filters;
    }

    public function order(): Order
    {
        return $this->order;
    }

    public function paginator(): Paginator
    {
        return $this->paginator;
    }
}
