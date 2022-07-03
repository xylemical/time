<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides management of micro-clocks.
 */
interface MicroClockManagerInterface {

  /**
   * Get a micro-clock by name.
   *
   * @param string $name
   *   The name of the clock.
   *
   * @return \Xylemical\Time\MicroClockInterface|null
   *   The clock.
   */
  public function getClock(string $name): ?MicroClockInterface;

}
