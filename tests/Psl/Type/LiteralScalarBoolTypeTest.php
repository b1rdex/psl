<?php

declare(strict_types=1);

namespace Psl\Tests\Type;

use Psl\Type;

final class LiteralScalarBoolTypeTest extends TypeTest
{
    public function getType(): Type\TypeInterface
    {
        return Type\literal_scalar(false);
    }

    public function getValidCoercions(): iterable
    {
        yield ['0', false];
        yield [0, false];
        yield [false, false];
    }

    public function getInvalidCoercions(): iterable
    {
        yield [null];
        yield [true];
        yield ['true'];
        yield ['false'];
        yield [1.2];
        yield [Type\bool()];
    }

    public function getToStringExamples(): iterable
    {
        yield [$this->getType(), 'false'];
        yield [Type\literal_scalar('5'), '"5"'];
        yield [Type\literal_scalar(5.5000), '5.5'];
        yield [Type\literal_scalar(true), 'true'];
        yield [Type\literal_scalar(5.50000000000005), '5.50000000000005'];
    }
}
