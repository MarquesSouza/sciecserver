<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CourseEventRepository;
use App\Entities\CourseEvent;
use App\Validators\CourseEventValidator;

/**
 * Class CourseEventRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CourseEventRepositoryEloquent extends BaseRepository implements CourseEventRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CourseEvent::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
