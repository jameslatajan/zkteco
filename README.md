# ZKTeco - Laravel Library

[![Issues](https://img.shields.io/github/issues/raihanafroz/zkteco?style=flat-square)](https://github.com/raihanafroz/zkteco/issues) [![Forks](https://img.shields.io/github/forks/raihanafroz/zkteco?style=flat-square)](https://github.com/raihanafroz/zkteco/network/members) [![Stars](https://img.shields.io/github/stars/raihanafroz/zkteco?style=flat-square)](https://github.com/raihanafroz/zkteco/stargazers) [![Total Downloads](https://img.shields.io/packagist/dt/rats/zkteco?style=flat-square)](https://packagist.org/packages/rats/zkteco) [![License](https://poser.pugx.org/rats/zkteco/license.svg)](https://packagist.org/packages/rats/zkteco)

The `rats/zkteco` package provides easy to use functions to ZKTeco Device activities.

**Requires:** **Laravel** >= **6.0**

**License:** MIT or later

## Installation:

You can install the package via composer:

```bash
composer require rats/zkteco
```

The package will automatically register itself.

You have to enable your php socket if it is not enable.

## Update `rats/zkteco` Library from Your Fork

To update the `rats/zkteco` library from your own fork without affecting the rest of your project:

---

### 1. Edit `composer.json`

Add your fork as a repository and require the desired branch:

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/jameslatajan/zkteco.git"
    }
],
"require": {
    "rats/zkteco": "dev-master",
    "codeigniter4/framework": "4.4.8"
},
"config": {
    "platform": {
        "php": "8.1.0"
    }
}

# Update only this package and its dependencies (safe update)
composer update rats/zkteco --with-dependencies

### Usage
1. Create a object of ZKTeco class.

```php
    use Rats\Zkteco\Lib\ZKTeco;

//  1 s't parameter is string $ip Device IP Address
//  2 nd  parameter is integer $port Default: 4370

    $zk = new ZKTeco('192.168.1.201');

//  or you can use with port
//    $zk = new ZKTeco('192.168.1.201', 8080);

````

2. Call ZKTeco methods

- **Connect**

```php
//    connect
//    this return bool
    $zk->connect();
```

- **Disconnect**

```php
//    disconnect
//    this return bool

    $zk->disconnect();
```

- **Enable Device**

```php
//    enable
//    this return bool/mixed

    $zk->enableDevice();
```

> **NOTE**: You have to call after read/write any info of Device.

- **Disable Device**

```php
//    disable
//    this return bool/mixed

    $zk->disableDevice();
```

> **NOTE**: You have to call before read/write any info of Device.

- **Device Version**

```php
//    get device version
//    this return bool/mixed

    $zk->version();
```

- **Device Os Version**

```php
//    get device os version
//    this return bool/mixed

    $zk->osVersion();
```

- **Power Off**

```php
//    turn off the device
//    this return bool/mixed

    $zk->shutdown();
```

- **Restart**

```php
//    restart the device
//    this return bool/mixed

    $zk->restart();
```

- **Sleep**

```php
//    sleep the device
//    this return bool/mixed

    $zk->sleep();
```

- **Resume**

```php
//    resume the device from sleep
//    this return bool/mixed

    $zk->resume();
```

- **Voice Test**

```php
//    voice test of the device "Thank you"
//    this return bool/mixed

    $zk->testVoice();
```

- **Platform**

```php
//    get platform
//    this return bool/mixed

    $zk->platform();
```

- **Firmware Version**

```php
//    get firmware version
//    this return bool/mixed

    $zk->fmVersion();
```

- **Work Code**

```php
//    get work code
//    this return bool/mixed

    $zk->workCode();
```

- **SSR**

```php
//    get SSR
//    this return bool/mixed

    $zk->ssr();
```

- **Pin Width**

```php
//    get  Pin Width
//    this return bool/mixed

    $zk->pinWidth();
```

- **Serial Number**

```php
//    get device serial number
//    this return bool/mixed

    $zk->serialNumber();
```

- **Device Name**

```php
//    get device name
//    this return bool/mixed

    $zk->deviceName();
```

- **Get Device Time**

```php
//    get device time

//    return bool/mixed bool|mixed Format: "Y-m-d H:i:s"

    $zk->getTime();
```

- **Set Device Time**

```php
//    set device time
//    parameter string $t Format: "Y-m-d H:i:s"
//    return bool/mixed

    $zk->setTime();
```

- **Get Users**

```php
//    get User
//    this return array[]

    $zk->getUser();
```

- **Set Users**

```php
//    set user

//    1 s't parameter int $uid Unique ID (max 65535)
//    2 nd parameter int|string $userid ID in DB (same like $uid, max length = 9, only numbers - depends device setting)
//    3 rd parameter string $name (max length = 24)
//    4 th parameter int|string $password (max length = 8, only numbers - depends device setting)
//    5 th parameter int $role Default Util::LEVEL_USER
//    6 th parameter int $cardno Default 0 (max length = 10, only numbers

//    return bool|mixed

    $zk->setUser();
```

- **Clear All Admin**

```php
//    remove all admin
//    return bool|mixed

    $zk->clearAdmin();
```

- **Clear All Users**

```php
//    remove all users
//    return bool|mixed

    $zk->clearAdmin();
```

- **Remove A User**

```php
//    remove a user by $uid
//    parameter integer $uid
//    return bool|mixed

    $zk->removeUser();
```

- **Get Attendance Log**

```php
//    get attendance log

//    return array[]

//    like as 0 => array:5 [▼
//              "uid" => 1      /* serial number of the attendance */
//              "id" => "1"     /* user id of the application */
//              "state" => 1    /* the authentication type, 1 for Fingerprint, 4 for RF Card etc */
//              "timestamp" => "2020-05-27 21:21:06" /* time of attendance */
//              "type" => 255   /* attendance type, like check-in, check-out, overtime-in, overtime-out, break-in & break-out etc. if attendance type is none of them, it gives  255. */
//              ]

    $zk->getAttendance();
```

- **Clear Attendance Log**

```php
//    clear attendance log

//    return bool/mixed

    $zk->clearAttendance();
```

# end
