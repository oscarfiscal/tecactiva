<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductoControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_create_product()
    {
        $this->withoutExceptionHandling();
       
        $response = $this->post('/productos', [
            'nombre_producto' => 'Producto de prueba',
            'descripcion' => 'Descrip de prueba',
             'precio' => '100',
             'estado' => '1',
             'fecha_publicacion' => '2020-05-05',
        ])->assertRedirect('productos');
            
        $this->assertDatabaseHas('productos', [
            'nombre_producto' => 'Producto de prueba',
            'descripcion' => 'Descrip de prueba',
            'precio' => '100',
            'estado' => '1',
            'fecha_publicacion' => '2020-05-05',
        ]);     
    
    }
}
