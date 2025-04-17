<?php

namespace SoinalaStudio\Voyager\Database\Types\Postgresql;

use SoinalaStudio\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    public const NAME = 'double precision';
    public const DBTYPE = 'float8';
}
