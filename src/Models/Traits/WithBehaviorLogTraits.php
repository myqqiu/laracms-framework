<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Cmspackage <qqiu@qq.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/myqqiu/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace Cmspackage\Laracms\Models\Traits;

use Cmspackage\Laracms\Events\BehaviorLogEvent;

trait WithBehaviorLogTraits
{
    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    /**
     * 返回记录日志的字段名称
     *
     * @return string
     */
    public function titleName(){
        return 'title';
    }

}
