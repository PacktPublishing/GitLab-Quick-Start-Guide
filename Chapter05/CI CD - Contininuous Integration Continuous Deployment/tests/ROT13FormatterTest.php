<?php
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Judges119\Monolog\Formatter\ROT13Formatter;

final class ROT13FormatterTest extends TestCase
{
    public function testFormatReturnsString()
    {
        $formatter = new ROT13Formatter();
        $this->assertInternalType(
            'string',
            $formatter->format(["message" => "Changed to ROT13"])
        );
    }

    public function testROT13IsAccurate()
    {
        $formatter = new ROT13Formatter();
        $record = ['message' => 'ABC'];
        $transformed = $formatter->format($record);
        $this->assertEquals(
            $transformed,
            'NOP'
        );
    }

    public function testROT13TextCanBeReversed()
    {
        $formatter = new ROT13Formatter();
        $record = ['message' => 'Changed to ROT13'];
        $transformed = $formatter->format($record);
        $transformed2 = $formatter->format(['message' => $transformed]);
        $this->assertEquals(
            $transformed2,
            $record['message']
        );
    }

    public function testFormatBatchReturnsArrayOfStrings()
    {
        $formatter = new ROT13Formatter();
        $records = [
            ['message' => 'Changed to ROT13'],
            ['message' => 'From ancient Rome'],
            ['message' => 'Modified Caesar cipher']
        ];
        $transformed = $formatter->formatBatch($records);
        $this->assertInternalType(
            'array',
            $transformed
        );
        $this->assertInternalType(
            'string',
            $transformed[0]
        );
    }
}
