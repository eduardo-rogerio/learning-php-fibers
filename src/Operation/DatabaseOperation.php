<?php

namespace Learning\Fibers\Operation;

use Fiber;

class DatabaseOperation
{
    public function executeOperation(): string
    {
        echo "Conectando ao banco de dados...\n";

        Fiber::suspend("Banco de dados: Esperando resposta...\n");
        sleep(1);

        echo "Finalizando operaçõa de banco de dados...\n";
        sleep(1);

        return "Banco de dados: Operação concluída\n";
    }
}