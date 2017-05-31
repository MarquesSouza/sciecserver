<?php

namespace App\Presenters;

use App\Transformers\CourseEventTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CourseEventPresenter
 *
 * @package namespace App\Presenters;
 */
class CourseEventPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CourseEventTransformer();
    }
}
