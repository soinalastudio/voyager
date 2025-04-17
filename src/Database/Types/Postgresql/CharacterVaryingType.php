<?php

namespace SoinalaStudio\Voyager\Database\Types\Postgresql;

use SoinalaStudio\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    public const NAME = 'character varying';
    public const DBTYPE = 'varchar';
}
