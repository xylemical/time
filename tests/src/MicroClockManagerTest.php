<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * Tests \Xylemical\Time\MicroClockManager.
 */
class MicroClockManagerTest extends TestCase {

  use ProphecyTrait;

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $clock = $this->prophesize(MicroClockInterface::class);
    $clock->getName()->willReturn('test');
    $clock = $clock->reveal();

    $manager = new MicroClockManager();
    $manager->addClock($clock);

    $this->assertSame($clock, $manager->getClock('test'));
    $this->assertNull($manager->getClock('foo'));
  }

}
