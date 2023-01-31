<?php declare(strict_types = 1);

namespace Company\Shared\Domain\ValueObject;

use Stringable;

abstract class Integer implements Stringable
{
    protected int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string) $this->value();
    }
}
