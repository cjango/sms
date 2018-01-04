<?php
// +------------------------------------------------+
// |http://www.cjango.com                           |
// +------------------------------------------------+
// | 修复BUG不是一朝一夕的事情，等我喝醉了再说吧！  |
// +------------------------------------------------+
// | Author: 小陈叔叔 <Jason.Chen>                  |
// +------------------------------------------------+
namespace cjango\model;

use Composer\Script\Event;
use model\Account;
use think\Model;

class Sms extends Model
{

    public static function postInstall(Event $event)
    {
        Account::create(['user_id' => 123]);
    }
}
