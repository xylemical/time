<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\Time\TimerFactory.
 */
class TimerFactoryTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $factory = new TimerFactory();
    $timer = $factory->create('test');
    $this->assertEquals('test', $timer->getName());
  }

}
