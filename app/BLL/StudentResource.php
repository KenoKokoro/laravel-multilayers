<?php


namespace App\BLL;


use App\DAL\Student\StudentRepository;
use App\Models\Student;
use App\Modules\FriendApi\FriendApiInterface;
use BaseTree\Models\BaseTreeModel;
use BaseTree\Resources\BaseResource;
use BaseTree\Resources\Contracts\Callbacks\CreatedCallback;
use BaseTree\Resources\Contracts\ResourceValidations;
use Illuminate\Http\Request;

class StudentResource extends BaseResource implements CreatedCallback, ResourceValidations
{
    /**
     * @var FriendApiInterface
     */
    private $friendApi;

    public function __construct(StudentRepository $repository, FriendApiInterface $friendApi)
    {
        parent::__construct($repository);
        $this->friendApi = $friendApi;
    }

    public function created(BaseTreeModel $model, array $dependencyAttributes = [], array $attributes): void
    {
        /** @var Student $model */
        $this->friendApi->createFor($model);
    }

    public function destroyRules($id, Request $request = null): array
    {
        // TODO: Implement destroyRules() method.
    }

    public function storeRules(Request $request = null): array
    {
        return [
            'full_name' => 'required|max:255',
            'index' => 'required|unique:students,index',
            'school_id' => 'required|exists:schools,id'
        ];
    }

    public function updateRules($id, Request $request = null): array
    {
        // TODO: Implement updateRules() method.
    }
}
