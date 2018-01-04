<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace cjango\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;

class CreateTable extends Command
{

    protected function configure()
    {
        $this->setName('sms:init')->setDescription("Create a migration for the sms table");
    }

    protected function execute(Input $input, Output $output)
    {
        $output->writeln('zhixing');
    }

    protected function createMigration()
    {

    }
}
