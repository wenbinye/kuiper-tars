<?php

declare(strict_types=1);

namespace kuiper\tars\server\monitor\collector;

class ServiceMemoryCollector extends AbstractCollector
{
    public function getValues(): array
    {
        exec("ps -e -ww -o 'rsz,cmd' | grep {$this->getServerName()} | grep -v grep | awk '{count += $1}; END {print count}'",
            $serverMemInfo);
        if (isset($serverMemInfo[0])) {
            return [
                'appMemoryUsage' => $serverMemInfo[0],
            ];
        }

        return [];
    }
}
