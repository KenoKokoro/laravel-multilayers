<?php

namespace Tests\Models;

use App\Models\Friend;
use App\Models\Student;
use BaseTree\Testing\DatabaseTestCase;
use Tests\CreatesApplication;

class FriendTest extends DatabaseTestCase
{

    /** @test */
    public function a_friend_belongs_to_a_student()
    {
        /** @var Friend $friend */
        $friend = create(Friend::class);
        /** @var Student $student */
        $student = create(Student::class);

        $friend->student()->associate($student)->save();

        $this->assertBelongsTo($friend, $student, 'student',
            ['id' => $friend->id, 'student_id' => $student->id]);
    }
}
