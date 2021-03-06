<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides management of clocks.
 */
interface ClockManagerInterface {

  /**
   * Get a clock by name.
   *
   * @param string $name
   *   The name of the clock.
   *
   * @return \Xylemical\Time\ClockInterface|null
   *   The clock.
   */
  public function getClock(string $name): ?ClockInterface;

}
