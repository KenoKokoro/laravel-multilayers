<?php


namespace App\Modules\FriendApi;


use App\Models\Student;
use Illuminate\Support\Collection;

interface FriendApiInterface
{
    /**
     * @param Student $student
     * @return Collection
     */
    public function createFor(Student $student): Collection;
}