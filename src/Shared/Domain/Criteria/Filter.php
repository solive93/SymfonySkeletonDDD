<?php declare(strict_types = 1);

namespace Company\Shared\Domain\Criteria;

final class Filter
{
    public function __construct(
        private readonly FilterField    $field,
        private readonly FilterOperator $operator,
        private readonly FilterValue    $value
    ) {}

    /**
     * @param string[] $values
     */
    public static function fromValues(array $values): self
    {
        return new self(
            new FilterField($values['field']),
            FilterOperator::from($values['operator']),
            new FilterValue($values['value'])
        );
    }

    public function field(): FilterField
    {
        return $this->field;
    }

    public function operator(): FilterOperator
    {
        return $this->operator;
    }

    public function value(): FilterValue
    {
        return $this->value;
    }
}
