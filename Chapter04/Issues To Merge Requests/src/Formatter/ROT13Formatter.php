<?php
namespace Judges119\Monolog\Formatter;

use Monolog\Formatter\FormatterInterface;

class ROT13Formatter implements FormatterInterface
{
    public function format(array $record)
    {
        return str_rot13($record['message']);
    }

    public function formatBatch(array $records)
    {
        foreach ($records as $key => $record) {
            $records[$key] = $this->format($record);
        }
        return $records;
    }
}
