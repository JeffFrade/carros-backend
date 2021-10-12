<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class CarTest extends TestCase
{
    /**
     * @throws \Throwable
     */
    public function testAllCarsEndpoint(): void
    {
        $response = $this->json('GET', '/api')
            ->assertStatus(JsonResponse::HTTP_OK)
            ->decodeResponseJson();

        $this->assertGreaterThanOrEqual(1000, count($response));
    }
}
