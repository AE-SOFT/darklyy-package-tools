<?php

namespace Darkeum\DarklyyPackageTools\Exceptions;

use Exception;

class InvalidPackage extends Exception
{
    public static function nameIsRequired(): self
    {
        return new static('Этот пакет не имеет имени. Вы можете установить его с помощью `$package->name("yourName")`');
    }
}
