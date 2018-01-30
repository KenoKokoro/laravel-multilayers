<?php


namespace App\BLL;


use App\DAL\School\SchoolRepository;
use BaseTree\Resources\BaseResource;
use BaseTree\Resources\Contracts\ResourceValidations;
use Illuminate\Http\Request;

class SchoolResource extends BaseResource implements ResourceValidations
{
    public function __construct(SchoolRepository $repository)
    {
        parent::__construct($repository);
    }

    public function destroyRules($id, Request $request = null): array
    {

    }

    public function storeRules(Request $request = null): array
    {
        // TODO: Implement storeRules() method.
    }

    public function updateRules($id, Request $request = null): array
    {
        // TODO: Implement updateRules() method.
    }
}
