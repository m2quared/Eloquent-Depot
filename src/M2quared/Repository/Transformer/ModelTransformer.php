<?php

namespace M2quared\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use M2quared\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer.
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
