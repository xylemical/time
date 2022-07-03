<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Tests \Xylemical\Time\Clock.
 */
class ClockTest extends TestCase {

  use ProphecyTrait;

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $clock = new Clock('test');
    $this->assertEquals('test', $clock->getName());
    $this->assertTrue(time() >= $clock->getTimestamp());

    $timestamp = strtotime('2022-07-02 12:00:00');
    $clock->setTimestamp($timestamp);
    $this->assertEquals($timestamp, $clock->getTimestamp());

    $clock = new Clock('test', $timestamp);
    $this->assertEquals($timestamp, $clock->getTimestamp());
  }

}
