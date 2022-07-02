<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\Time\TimerManager.
 */
class TimerManagerTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $timer = new Timer('test');
    $manager = new TimerManager();
    $manager->addTimer($timer);

    $this->assertSame($timer, $manager->getTimer('test'));
    $this->assertNull($manager->getTimer('foo'));
  }

}
