<?php

namespace Tests\Feature\API;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class UfControllerTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->getJson('/api/cidades/mg');
        $response->assertStatus(200);
    }
    public function test_the_json_return_node_name_and_ibge_code()
    {
        $response = $this->getJson('/api/cidades/mg');
        $response->assertJson(fn (AssertableJson $json) =>
            $json->hasAll(['0.name','0.ibge_code'])
        );
    }
}
