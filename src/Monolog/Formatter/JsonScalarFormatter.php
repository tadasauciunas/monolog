<?php

namespace Monolog\Formatter;

use Monolog\Formatter\ScalarFormatter;

class JsonScalarFormatter extends ScalarFormatter
{
    /**
     * @param array $record
     * @return string
     */
    public function format(array $record)
    {
        $record = parent::format($record);

        return json_encode($record);
    }
}
