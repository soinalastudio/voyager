<?php

namespace SoinalaStudio\Voyager\Database\Types\Postgresql;

use SoinalaStudio\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    public const NAME = 'character';
    public const DBTYPE = 'bpchar';
}
