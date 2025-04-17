<?php

namespace SoinalaStudio\Voyager\Database\Types\Sqlite;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use SoinalaStudio\Voyager\Database\Types\Type;

class RealType extends Type
{
    public const NAME = 'real';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'real';
    }
}
