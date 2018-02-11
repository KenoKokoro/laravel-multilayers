<?php


namespace App\Modules\FriendApi;


use App\DAL\Friend\FriendRepository;
use App\Models\Student;
use Illuminate\Support\Collection;
use RestfulClient\Client\RestfulClientInterface;

class FriendApiImpl implements FriendApiInterface
{
    /**
     * @var RestfulClientInterface
     */
    private $client;

    /**
     * @var FriendRepository
     */
    private $friendRepository;

    public function __construct(RestfulClientInterface $client, FriendRepository $friendRepository)
    {
        $this->client = $client;
        $this->friendRepository = $friendRepository;
    }

    public function createFor(Student $student): Collection
    {
        $friends = collect();

        $response = $this->client->get('friends.index');

        foreach ($response['results'] as $friend) {
            $createdFriend = $this->friendRepository->create([
                'student_id' => $student->id,
                'email' => $friend['email']
            ]);

            $friends->push($createdFriend);
        }

        return $friends;
    }
}