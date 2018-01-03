<?php
// +------------------------------------------------+
// |http://www.cjango.com                           |
// +------------------------------------------------+
// | 修复BUG不是一朝一夕的事情，等我喝醉了再说吧！  |
// +------------------------------------------------+
// | Author: 小陈叔叔 <Jason.Chen>                  |
// +------------------------------------------------+
namespace cjango;

use think\Config;

class Sms
{
    /**
     * 配置文件
     * @var array
     */
    private $config = [];

    public function __construct()
    {
        $this->config = Config::get('sms');
    }
}
