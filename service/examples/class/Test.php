<?php
namespace BL;

use Swoole\Protocol\SOAServer;

class Test
{
    static function test1($str = 'empty')
    {
        return var_dump(SOAServer::getClientEnv(),true);
    }

    static function hello()
    {
        return var_dump(SOAServer::getRequestHeader(),true);
    }
}