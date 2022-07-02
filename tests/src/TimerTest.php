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
    $this->assertEquals(0, $timer->getMicroseconds());
    $this->assertFalse($timer->isRunning());

    usleep(10);
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertEquals(0, $timer->getMicroseconds());

    $timer->start();

    $this->assertTrue($timer->isRunning());

    usleep(500000);
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertEquals(0, $timer->getMicroseconds());

    $timer->stop();

    usleep(500000);
    $this->assertFalse($timer->isRunning());
    $this->assertEquals(0, $timer->getSeconds());
    $microseconds = $timer->getMicroseconds();
    $this->assertTrue($microseconds > 0);

    $timer->start();
    usleep(500000);
    $timer->stop();

    $this->assertTrue($timer->getSeconds() > 0);
    $this->assertTrue($timer->getMicroseconds() > 0);

    $timer->reset();
    $this->assertEquals(0, $timer->getSeconds());
    $this->assertEquals(0, $timer->getMicroseconds());

    $timer->start();
    usleep(500);
    $timer->reset();
    $timer->stop();

    $this->assertEquals(0, $timer->getSeconds());
    $this->assertTrue($timer->getMicroseconds() >= 500);
  }

}
