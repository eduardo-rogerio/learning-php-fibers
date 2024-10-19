<?php

namespace Learning\Fibers\Progress;

use Fiber;

class LongOperation
{
    public function executeOperation(): string
    {
        for ($i = 1; $i <= 10; $i++) {
            sleep(1);
            $progress = $i * 10;
            Fiber::suspend("Progresso: {$progress}%\n");
        }
        return "Operação concluída";
    }
}