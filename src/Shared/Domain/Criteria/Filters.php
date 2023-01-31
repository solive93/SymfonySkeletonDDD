<?php declare(strict_types = 1);

namespace Company\Shared\Domain\Criteria;

use Company\Shared\Domain\ValueObject\Collection;

final class Filters extends Collection
{
    protected function type(): string
    {
        return Filter::class;
    }

    /**
     * @param array[] $values
     * @return static
     */
    public static function fromValues(array $values): Filters
    {
        return new self(array_map(fn ($value) => Filter::fromValues($value), $values));
    }

    public function add(Filter $filter): self
    {
        return new self(array_merge($this->items(), [$filter]));
    }

    /**
     * @return Filter[]
     */
    public function filters(): array
    {
        return $this->items();
    }
}
