<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TypeActivityRepository;
use App\Entities\TypeActivity;
use App\Validators\TypeActivityValidator;

/**
 * Class TypeActivityRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TypeActivityRepositoryEloquent extends BaseRepository implements TypeActivityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeActivity::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
