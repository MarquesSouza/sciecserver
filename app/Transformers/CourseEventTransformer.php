<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\CourseEvent;

/**
 * Class CourseEventTransformer
 * @package namespace App\Transformers;
 */
class CourseEventTransformer extends TransformerAbstract
{

    /**
     * Transform the \CourseEvent entity
     * @param \CourseEvent $model
     *
     * @return array
     */
    public function transform(CourseEvent $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
