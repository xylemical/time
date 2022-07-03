<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use function usleep;

/**
 * Tests \Xylemical\Time\Timer.
 */
class TimerTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $timer = new Timer('test');
    $this->assertEquals('test', $timer->getName());
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertEquals(0.0, $timer->getTime());
    $this->assertEquals(0, $timer->getMilliseconds());
    $this->assertEquals(0, $timer->getMicroseconds());
    $this->assertFalse($timer->isRunning());

    usleep(10);
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertEquals(0, $timer->getMilliseconds());
    $this->assertEquals(0, $timer->getMicroseconds());

    $timer->start();

    $this->assertTrue($timer->isRunning());

    usleep(500000);
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertEquals(0, $timer->getMilliseconds());
    $this->assertEquals(0, $timer->getMicroseconds());

    $timer->stop();

    usleep(500000);
    $this->assertFalse($timer->isRunning());
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertTrue($timer->getTime() > 0 && $timer->getTime() < 1.0);
    $milliseconds = $timer->getMilliseconds();
    $this->assertTrue($milliseconds > 0);
    $microseconds = $timer->getMicroseconds();
    $this->assertTrue($microseconds > 0);
    $this->assertEquals($milliseconds, floor($microseconds / 1000));

    $timer->start();
    usleep(505000);
    $timer->stop();

    $this->assertTrue($timer->getSeconds() > 0);
    $this->assertTrue($timer->getTime() > 0.0);
    $this->assertTrue($timer->getMilliseconds() > 0);
    $this->assertTrue($timer->getMicroseconds() > 0);

    $timer->reset();
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertEquals(0.0, $timer->getTime());
    $this->assertEquals(0, $timer->getMilliseconds());
    $this->assertEquals(0, $timer->getMicroseconds());

    $timer->start();
    usleep(500);
    $timer->reset();
    $timer->stop();

    $this->assertEquals(0, $timer->getSeconds());
    $this->assertTrue($timer->getMicroseconds() >= 500);
  }

}
