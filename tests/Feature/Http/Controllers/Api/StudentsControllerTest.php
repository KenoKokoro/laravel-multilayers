<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Friend;
use App\Models\Student;
use BaseTree\Testing\DatabaseTestCase;
use Illuminate\Http\JsonResponse;
use RestfulClient\Client\RestfulClientInterface;
use Tests\CreatesApplication;

class StudentsControllerTest extends DatabaseTestCase
{

    /** @test */
    public function it_should_fetch_all_students()
    {
        # Arrange
        create(Student::class, 15);
        $uri = route('students.index');
        # Act
        $response = $this->jsonGet($uri);
        # Assert
        $response->assertStatus(JsonResponse::HTTP_OK)->assertJsonStructure(['status', 'message', 'data']);
        $data = $response->json()['data'];
        $this->assertCount(15, $data);
    }

    /** @test */
    public function it_should_be_able_to_store_a_student()
    {
        # Arrange
        $apiMock = $this->mock(RestfulClientInterface::class);
        $data = make(Student::class)->toArray();
        $uri = route('students.store');
        $apiMock->shouldReceive('get')->with('friends.index')->andReturn([
            'results' => [
                ['email' => 'friend 1'],
                ['email' => 'friend 2']
            ]
        ]);
        # Act
        $response = $this->jsonPost($uri, $data);
        # Assert
        $response->assertStatus(JsonResponse::HTTP_CREATED)->assertJsonStructure(['status', 'message', 'data']);
        $responseData = $response->json()['data'];
        $this->assertEquals($data, array_only($responseData, ['full_name', 'index', 'school_id']));
        $this->assertCount(2, Friend::all());
    }
}
