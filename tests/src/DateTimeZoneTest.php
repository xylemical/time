<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\Time\DateTimeZone.
 */
class DateTimeZoneTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $zone = new \DateTimeZone('EST');
    $result = DateTimeZone::createFrom($zone);
    $this->assertEquals('EST', $result->getName());
  }

}
