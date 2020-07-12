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
use Swoft\Log\Helper\CLog;
use Swoft\Redis\Redis;

// use Swoft\Http\Message\Response;

/**
 * Class AuthController
 *
 * @Controller(prefix="auth")
 * @package App\Http\Controller
 */
class AuthController{
    /**
     * Get data list. access uri path: auth
     * @RequestMapping(route="auth", method=RequestMethod::GET)
     * @return array
     */
    public function index(): array
    {
        CLog::info('run :'.__METHOD__);
        Redis::set('hello', 'Swoft');
        $str = Redis::get('hello');

        echo config('env');
        CLog::info("test log");
        return ['item0','item333' ,$str];
    }

    /**
     * @RequestMapping(route="login")
     * @return array
     */
    public function login() {
        return [
            'code' => 200,
            'msg' => '登录成功',
            'data' => [
                'token' => uniqid(),
            ],
        ];
    }

    /**
     * Get one by ID. access uri path: auth/{id}
     * @RequestMapping(route="{id}", method=RequestMethod::GET)
     * @return array
     */
    public function get(): array
    {
        return ['item0'];
    }

    /**
     * Create a new record. access uri path: auth
     * @RequestMapping(route="auth", method=RequestMethod::POST)
     * @return array
     */
    public function post(): array
    {
        return ['id' => 2];
    }

    /**
     * Update one by ID. access uri path: auth/{id}
     * @RequestMapping(route="{id}", method=RequestMethod::PUT)
     * @return array
     */
    public function put(): array
    {
        return ['id' => 1];
    }

    /**
     * Delete one by ID. access uri path: auth/{id}
     * @RequestMapping(route="{id}", method=RequestMethod::DELETE)
     * @return array
     */
    public function del(): array
    {
        return ['id' => 1];
    }
}
