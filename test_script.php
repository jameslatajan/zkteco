<?php

require __DIR__ . '/vendor/autoload.php';

use Rats\Zkteco\Lib\ZKTeco;

// Default ZKTeco device IP and port
$ip = '192.168.1.141'; // CHANGE THIS TO YOUR DEVICE IP
$port = 4370;

echo "Attempting to connect to ZKTeco device at $ip:$port...\n";

$zk = new ZKTeco($ip, $port);

if ($zk->connect()) {
    echo "Connected successfully!\n";

    echo "Device Name: " . $zk->deviceName() . "<br>";
    echo "Version: " . $zk->version() . "<br>";
    echo "OS Version: " . $zk->osVersion() . "<br>";
    echo "Platform: " . $zk->platform() . "<br>";
    echo "Serial Number: " . $zk->serialNumber() . "<br>";

    // test get attendance
    $attendance = $zk->getAttendance();
    var_dump($attendance);

    $zk->disconnect();
    echo "Disconnected.\n";
} else {
    echo "Failed to connect to device. Please check the IP address and network connection.\n";
}
