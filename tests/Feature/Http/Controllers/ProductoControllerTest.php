<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
       

        $user = User::factory()->create();

        $this->actingAs($user);
        
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
