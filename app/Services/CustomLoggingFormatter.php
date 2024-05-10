<?php

namespace App\Services;

use Monolog\Formatter\NormalizerFormatter;
use Monolog\LogRecord;

class CustomLoggingFormatter extends NormalizerFormatter
{
    public function format(LogRecord $logRecord)
    {
        // Add any additional formatting you need here. For example:
        // - You can add timestamps to your logs.
        // - You can filter out sensitive data from the log context.
        // - You can modify the message itself before it gets logged.
        $result = parent::format($logRecord);
        $result['app_name'] = env('APP_NAME');
        $result['@timestamp'] = $this->normalize($logRecord->datetime);
        return $this->toJson($result) . "\n";
    }
}
