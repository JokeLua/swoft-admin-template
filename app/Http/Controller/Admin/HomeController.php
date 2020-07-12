<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://swoft.org/docs
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Http\Controller\Admin;

use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Log\Helper\CLog;

// use Swoft\Http\Message\Response;

/**
 * Class Admin\homeController
 *
 * @Controller(prefix="admin")
 * @package App\Http\Controller
 */
class HomeController{
    /**
     * Get Dashboard. access uri path: /
     * @RequestMapping(route="/admin", method=RequestMethod::GET)
     * @RequestMapping(route="home", method=RequestMethod::GET)
     * @return Response
     */
    public function index(): Response
    {
        CLog::info('run :'.__METHOD__);
        return view('admin/home/index');
    }
}
