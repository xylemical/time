<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use function date_default_timezone_get;

/**
 * Tests \Xylemical\Time\DateTime.
 */
class DateTimeTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $datetime = new DateTime();
    $this->assertEquals(date_default_timezone_get(), $datetime->getTimezone()->getName());
  }

}
