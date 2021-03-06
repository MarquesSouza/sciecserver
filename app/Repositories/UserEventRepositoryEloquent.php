<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserEventRepository;
use App\Entities\UserEvent;
use App\Validators\UserEventValidator;

/**
 * Class UserEventRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UserEventRepositoryEloquent extends BaseRepository implements UserEventRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserEvent::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
