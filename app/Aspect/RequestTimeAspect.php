<?php


namespace App\Aspect;

use Swoft\Aop\Annotation\Mapping\Aspect;
use Swoft\Aop\Annotation\Mapping\Before;
use Swoft\Aop\Annotation\Mapping\PointBean;
/**
 * Class RequestTimeAspect
 * @package App\Aspect
 *
 * @Aspect
 *
 * @PointBean()
 */
class RequestTimeAspect
{
    /**
     * @Before()
     */
    public function beforeRun(): void {

    }
}
