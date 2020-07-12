<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://swoft.org/docs
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Http\Controller;

use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Http\Message\Response;
use Swoft\Log\Helper\CLog;

/**
 * Class HomeController
 *
 * @Controller(prefix="/")
 * @package App\Http\Controller
 */
class HomeController{
    /**
     * Get data list. access uri path: /
     * @RequestMapping(route="/", method=RequestMethod::GET)
     * @return Response
     */
    public function index(): Response
    {
        CLog::info('run'.__METHOD__);
        return view('home/index',[
            'title' => '首页'
        ],'layouts/default.php');
    }



    /**
     * Create a new record. access uri path: /
     * @RequestMapping(route="/", method=RequestMethod::POST)
     * @return array
     */
    public function post(): array
    {
        return ['id' => 2];
    }

    /**
     * Update one by ID. access uri path: //{id}
     * @RequestMapping(route="{id}", method=RequestMethod::PUT)
     * @return array
     */
    public function put(): array
    {
        return ['id' => 1];
    }

    /**
     * Delete one by ID. access uri path: //{id}
     * @RequestMapping(route="{id}", method=RequestMethod::DELETE)
     * @return array
     */
    public function del(): array
    {
        return ['id' => 1];
    }
}
