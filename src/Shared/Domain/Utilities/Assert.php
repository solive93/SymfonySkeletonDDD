<?php declare(strict_types=1);

namespace Company\Shared\Domain\Utilities;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as RamseyUuid;

final class Assert
{
    /**
     * @param object[] $items
     */
    public static function arrayOf(string $class, array $items): void
    {
        foreach ($items as $item) {
            self::instanceOf($class, $item);
        }
    }

    public static function instanceOf(string $class, object $item): void
    {
        if (!$item instanceof $class) {
            throw new InvalidArgumentException(
                sprintf('The object <%s> is not an instance of <%s>', $class, get_class($item))
            );
        }
    }

    public static function validUuid(string $uuid): void
    {
        if (!RamseyUuid::isValid($uuid)) {
            throw new InvalidArgumentException(sprintf('<%s> is not a valid uuid', $uuid));
        }
    }
}