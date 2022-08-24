<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\UserController
 */
class UserControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $users = User::factory()->count(3)->create();

        $response = $this->get(route('user.index'));

        $response->assertOk();
        $response->assertViewIs('user.index');
        $response->assertViewHas('users');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('user.create'));

        $response->assertOk();
        $response->assertViewIs('user.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserController::class,
            'store',
            \App\Http\Requests\UserStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $cpf = $this->faker->word;
        $name = $this->faker->name;
        $number = $this->faker->word;
        $status = $this->faker->boolean;
        $cell = $this->faker->word;
        $mail = $this->faker->word;

        $response = $this->post(route('user.store'), [
            'cpf' => $cpf,
            'name' => $name,
            'number' => $number,
            'status' => $status,
            'cell' => $cell,
            'mail' => $mail,
        ]);

        $users = User::query()
            ->where('cpf', $cpf)
            ->where('name', $name)
            ->where('number', $number)
            ->where('status', $status)
            ->where('cell', $cell)
            ->where('mail', $mail)
            ->get();
        $this->assertCount(1, $users);
        $user = $users->first();

        $response->assertRedirect(route('user.index'));
        $response->assertSessionHas('user.id', $user->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.show', $user));

        $response->assertOk();
        $response->assertViewIs('user.show');
        $response->assertViewHas('user');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.edit', $user));

        $response->assertOk();
        $response->assertViewIs('user.edit');
        $response->assertViewHas('user');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserController::class,
            'update',
            \App\Http\Requests\UserUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $user = User::factory()->create();
        $cpf = $this->faker->word;
        $name = $this->faker->name;
        $number = $this->faker->word;
        $status = $this->faker->boolean;
        $cell = $this->faker->word;
        $mail = $this->faker->word;

        $response = $this->put(route('user.update', $user), [
            'cpf' => $cpf,
            'name' => $name,
            'number' => $number,
            'status' => $status,
            'cell' => $cell,
            'mail' => $mail,
        ]);

        $user->refresh();

        $response->assertRedirect(route('user.index'));
        $response->assertSessionHas('user.id', $user->id);

        $this->assertEquals($cpf, $user->cpf);
        $this->assertEquals($name, $user->name);
        $this->assertEquals($number, $user->number);
        $this->assertEquals($status, $user->status);
        $this->assertEquals($cell, $user->cell);
        $this->assertEquals($mail, $user->mail);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('user.destroy', $user));

        $response->assertRedirect(route('user.index'));

        $this->assertModelMissing($user);
    }
}
