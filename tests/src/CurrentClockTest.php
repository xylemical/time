<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Tests \Xylemical\Time\CurrentClock.
 */
class CurrentClockTest extends TestCase {

  use ProphecyTrait;

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $timestamp = strtotime('2022-07-02 12:00:00');
    $clock = $this->prophesize(ClockInterface::class);
    $clock->getTimestamp()->willReturn($timestamp);
    $clock = $clock->reveal();

    $current = new CurrentClock($clock);
    $this->assertEquals($timestamp, $current->getCurrentTime());
  }

}
