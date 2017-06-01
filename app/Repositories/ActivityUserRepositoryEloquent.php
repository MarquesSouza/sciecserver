<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ActivityUserRepository;
use App\Entities\ActivityUser;
use App\Validators\ActivityUserValidator;

/**
 * Class ActivityUserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ActivityUserRepositoryEloquent extends BaseRepository implements ActivityUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ActivityUser::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
