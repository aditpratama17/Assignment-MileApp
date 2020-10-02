<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PackageControllerTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPackage()
    {
        $response = $this->get('/package');
        $response->assertStatus(200);
    }

    public function testPackagePost()
    {
        $response = $this->get('/package');
        $response->assertStatus(200);
    }

    public function testgetIndexTrue()
    {
        // With true data
        $id = "d0090c40-539f-479a-8274-899b9970bddc";
        $response = $this->get('/package/'.$id);
        $response->assertStatus(200);
    }

    public function testgetIndexFalse()
    {   
        // with false data
        $id = "d0090c40";
        $response = $this->get('/package'.$id);
        $response->assertStatus(404);
    }


    public function testputPackage()
    {   
        $package = $this->faker->name;
        $response = $this->actingAs($package)
        ->put(route('packages.put'), [
            'customer_name' => $this->faker->name
        ]);
        $response->assertStatus(200);
    }

    // public function testpatchPackage()
    // {   
    //     // with false data
    //     $package = factory(Packages::class)->update();

    //     $response = $this->actingAs($user)
    //     //Hit post ke method store, fungsinya ya akan lari ke fungsi store.
    //     ->post(route('product.store'), [
    //         //isi parameter sesuai kebutuhan request
    //         'name' => $this->faker->words(3, true),
    //         'cat' => $category->id,
    //         'quantity' => $this->faker->randomNumber(3),
    //         'buy_price' => $this->faker->randomNumber(6),
    //         'sell_price' => $this->faker->randomNumber(6),
    //     ]);

    //     //Tuntutan status 302, yang berarti redirect status code.
    //     $response->assertStatus(302);
    // }

    // public function testdeletePackage()
    // {   
    //     // with false data
    //     $id = "d0090c40";
    //     $response = $this->get('/package'.$id);
    //     $response->assertStatus(404);
    // }
}
