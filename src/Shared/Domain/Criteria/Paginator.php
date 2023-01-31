<?php declare(strict_types=1);

namespace Company\Shared\Domain\Criteria;

final class Paginator
{
    public function __construct(public readonly ?int $offset = null, public readonly ?int $limit = null) {}
}