<?php

namespace App\Tests;

use App\Config;
use App\Logger;
use Error;
use Exception;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testLoggerInstance(): void
    {
        Logger::log("Testing");

        $l1 = Logger::getInstance();
        $l2 = Logger::getInstance();

        $this->assertTrue($l1 === $l2);
    }

    public function testConfigSetup(): void
    {
        $config1 = Config::getInstance();

        $login = "test_login";
        $password = "test_password";

        $config1->setValue("login", $login);
        $config1->setValue("password", $password);

        $config2 = Config::getInstance();

        $this->assertEquals($config2->getValue("login"), $login);
        $this->assertEquals($config2->getValue("password"), $password);
    }

    public function testUnserialisationShouldFail(): void
    {
        $this->expectException(Exception::class);
        $logger_serialized = serialize(Logger::getInstance());
        unserialize($logger_serialized);
    }

    public function testCloneShouldFail(): void
    {
        $this->expectException(Error::class);

        $logger = Logger::getInstance();
        $logger2 = clone($logger);
    }
}