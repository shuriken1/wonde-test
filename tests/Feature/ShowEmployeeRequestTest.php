<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Response;
use App\Services\WondeService;

class ShowEmployeeRequestTest extends TestCase
{
    public function test_it_fails_validation_if_the_id_is_not_a_valid_wonde_reference()
    {
        // Arrange

        // Act
        $response = $this->get(route('employees.show', ['id' => 'A1234']));

        // Assert
        $response->assertStatus(Response::HTTP_FOUND);
        $response->assertSessionHasErrors('id');
    }
}
