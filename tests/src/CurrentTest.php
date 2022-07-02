<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;

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
  }

}
