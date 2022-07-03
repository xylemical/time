<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;
use function microtime;

/**
 * Tests \Xylemical\Time\MicroClock.
 */
class MicroClockTest extends TestCase {

  use ProphecyTrait;

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $clock = new MicroClock('test');
    $this->assertEquals('test', $clock->getName());
    $this->assertTrue(microtime(TRUE) >= $clock->getTime());

    $timestamp = 10;
    $timestamp += 0.5;
    $clock->setTime($timestamp);
    $this->assertEqualsWithDelta($timestamp, 0.000000000001, $clock->getTime());
    $this->assertEquals(10, $clock->getSeconds());
    $this->assertEquals(500, $clock->getMilliseconds());
    $this->assertEquals(500000, $clock->getMicroseconds());

    $clock = new MicroClock('test', $timestamp);
    $this->assertEquals($timestamp, $clock->getTime());
  }

}
