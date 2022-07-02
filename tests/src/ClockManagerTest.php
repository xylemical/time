<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Tests \Xylemical\Time\ClockManager.
 */
class ClockManagerTest extends TestCase {

  use ProphecyTrait;

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $clock = $this->prophesize(ClockInterface::class);
    $clock->getName()->willReturn('test');
    $clock = $clock->reveal();

    $manager = new ClockManager();
    $manager->addClock($clock);

    $this->assertSame($clock, $manager->getClock('test'));
    $this->assertNull($manager->getClock('foo'));
  }

}
