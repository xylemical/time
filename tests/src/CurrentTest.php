<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use function time;

/**
 * Tests \Xylemical\Time\Current.
 */
class CurrentTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $current = new Current();
    $this->assertTrue(time() >= $current->getCurrentTime());

    $timestamp = strtotime('2022-07-04 12:00:00');
    $current = new Current($timestamp);
    $this->assertEquals($timestamp, $current->getCurrentTime());

    $timestamp = strtotime('2022-07-04 11:00:00');
    $current->setCurrentTime($timestamp);
    $this->assertEquals($timestamp, $current->getCurrentTime());

    $current->setCurrentTime(NULL);
    $this->assertTrue(time() >= $current->getCurrentTime());
  }

}
