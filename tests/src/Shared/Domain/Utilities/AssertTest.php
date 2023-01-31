<?php

namespace Company\Tests\Shared\Domain\Utilities;

use Company\Shared\Domain\Utilities\Assert;
use Company\Shared\Domain\ValueObject\Uuid;
use Ramsey\Uuid\Uuid as RamseyUuid;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class AssertTest extends TestCase
{
    public function test_valid_uuid(): void
    {
        $uuid = Uuid::random()->value();
        Assert::validUuid($uuid);

        self::assertTrue(RamseyUuid::isValid($uuid));
    }

    public function test_should_throw_exception(): void
    {
        self::expectException(InvalidArgumentException::class);

        Assert::validUuid('InvalidUuid');
    }
}
