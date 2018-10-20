<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Support\FAcades\DB;


class UsersModuleTest extends TestCase
{
    /** @test */
    function it_shows_the_users_list()
    {
        factory(User::class)->create([
            'nombres' => 'Joel',
        ]);

        factory(User::class)->create([
            'nombres' => 'Ellie',
        ]);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de Usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear usuario');
    }

/*     /** @test 
    function it_creates_a_new_user()
    {
        $this->post('/usuarios/', [
            'nombres' => 'Blaster',
            'apellidos' => 'Fernandez',
            'email' => 'gerundio@gmail.com',
            'password' => '123456'
        ])->assertRedirect('usuarios');

        $this->assertCredentials([
            'nombres' => 'Blaster',
            'apellidos' => 'Fernandez',
            'email' => 'gerundio@gmail.com',
            'password' => '123456'
        ]);
    } 
*/
}
