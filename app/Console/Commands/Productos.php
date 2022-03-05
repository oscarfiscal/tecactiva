<?php

namespace App\Console\Commands;

use App\Models\Producto;
use Illuminate\Console\Command;

class Productos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'producto:tarea';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear productos';

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
        Producto::create(['nombre_producto' => now(),
                            'descripcion' => 'nuevo producto',
                            'precio' => '100',
                            'estado' => '2',
                            'fecha_publicacion' => now()]);
    }
}
