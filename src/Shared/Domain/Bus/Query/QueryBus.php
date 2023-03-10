<?php declare(strict_types=1);

namespace Company\Shared\Domain\Bus\Query;

interface QueryBus
{
    public function handle(Query $query): void;
}