<?php

namespace Rats\Zkteco\Tests;

use PHPUnit\Framework\TestCase;
use Rats\Zkteco\Lib\ZKTeco;

class ZktecoTest extends TestCase
{
    public function testInstantiation()
    {
        $ip = '192.168.1.201';
        $port = 4370;
        $zk = new ZKTeco($ip, $port);

        $this->assertInstanceOf(ZKTeco::class, $zk);
        $this->assertEquals($ip, $zk->_ip);
        $this->assertEquals($port, $zk->_port);
    }

    public function testConnectionFailure()
    {
        $ip = '127.0.0.1'; // Localhost, unlikely to be a ZKTeco device
        $port = 4370;
        $zk = new ZKTeco($ip, $port);

        // Since we don't have a device, we expect false or an exception handled gracefully
        // The connect method returns false on failure
        $this->assertFalse($zk->connect());
    }
}
