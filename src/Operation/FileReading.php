<?php

namespace Learning\Fibers\Operation;

use Fiber;

class FileReading
{
    public function executeOperation(): string
    {
        echo "Iniciando leitura de arquivo...\n";

        Fiber::suspend("Arquivo: Lendo conteúdo...\n");
        sleep(1);

        echo "Finalizando leitura de arquivo...\n";
        sleep(1);

        return "Arquivo: Operação concluída\n";
    }
}