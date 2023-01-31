<?php declare(strict_types = 1);

namespace Company\Shared\Domain\ValueObject;

use Company\Shared\Domain\Utilities\Assert;
use Ramsey\Uuid\Uuid as RamseyUuid;
use Stringable;

class Uuid extends TextString implements Stringable
{
    protected string $value;

    public function __construct(string $value)
    {
        Assert::validUuid($value);

        $this->value = $value;
    }

    public static function random(): self
    {
        return new self(RamseyUuid::uuid4()->toString());
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(Uuid $other): bool
    {
        return $this->value() === $other->value();
    }

    public function __toString(): string
    {
        return $this->value();
    }
}
