<?php

namespace Company\Shared\Domain\ValueObject;

class TextString
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}