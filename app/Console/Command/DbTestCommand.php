<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://swoft.org/docs
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Console\Command;

use Swoft\Console\Annotation\Mapping\Command;
use Swoft\Console\Annotation\Mapping\CommandMapping;
use Swoft\Console\Annotation\Mapping\CommandArgument;
use Swoft\Console\Annotation\Mapping\CommandOption;
use Swoft\Console\Input\Input;
use Swoft\Console\Output\Output;
use Swoft\Db\DB;
use Swoft\Redis\Redis;

/**
 * This is description for the command group
 *
 * @Command()
 */
class DbTestCommand{
    /**
     * this is description for the command
     *
     * @CommandMapping(alias="myc")
     * @CommandArgument("arg0", type="string", desc="this is argument description")
     *
     * @CommandOption("opt0", short="s", type="integer", default=3,
     *     desc="Interval time for watch files, unit is seconds"
     * )
     *
     * @param Input  $input
     * @param Output $output
     * @return int The exit code
     *
     * @example
     *   {fullCommand} -h
     *   {fullCommand} arg0val --opt 20
     */
    public function myCommand(Input $input, Output $output): int
    {
        Redis::set('hello', 'Swoft');
        $str = Redis::get('hello');
        $output->writeln('hello,'.$str);
        $output->writeln("config.env:".config('env'));
//        $list = DB::table('user')->get();
//        var_dump($list);
        return 0;
    }

    /**
     * @CommandMapping()
     *
     * @param Input $input
     * @param Output $output
     */
    public function db(Input $input, Output $output) {
        $output->writeln("db");
        $record = DB::table('user')->first();
        var_export($record);
        $output->writeln('test:'.config('name','only'));
    }
}
