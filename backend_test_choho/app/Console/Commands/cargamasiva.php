<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\database\seeders\PedidoSeed;

use Artisan;

class cargamasiva extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cargamasiva';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'carga masivamente los datos para testear el proyecto';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln("Ejecuta");
        $out->writeln("Inicia Carga masiva");


        //Artisan::call("db:seed", ['PedidoSeed' => $class]);

        Artisan::call("db:seed --class=PedidoSeed");
        $out->writeln("Crea y carga masivamente de pedidos");

        Artisan::call("db:seed --class=DetallePedidoSeed");
        $out->writeln("Crea y carga masivamente de detalles pedidos");

        $out->writeln("Finaliza Carga masiva");

        return 0;
    }
}
