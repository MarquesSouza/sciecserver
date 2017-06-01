<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TypeActivityUserRepository;
use App\Entities\TypeActivityUser;
use App\Validators\TypeActivityUserValidator;

/**
 * Class TypeActivityUserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TypeActivityUserRepositoryEloquent extends BaseRepository implements TypeActivityUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeActivityUser::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
