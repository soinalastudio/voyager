<?php

namespace SoinalaStudio\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use SoinalaStudio\Voyager\Database\Types\Type;

class TxidSnapshotType extends Type
{
    public const NAME = 'txid_snapshot';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'txid_snapshot';
    }
}
