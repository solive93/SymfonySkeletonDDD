<?php declare(strict_types = 1);

namespace Company\Shared\Domain\Criteria;

enum FilterOperator: string
{
    case EQUAL        = '=';
    case NOT_EQUAL    = '!=';
    case GRATER_THAN  = '>';
    case LOWER_THAN   = '<';
    case CONTAINS     = 'CONTAINS';
    case NOT_CONTAINS = 'NOT_CONTAINS';
}
