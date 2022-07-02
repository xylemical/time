<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides the current time.
 */
interface CurrentInterface {

  /**
   * Get the current time.
   *
   * @return int
   *   The time.
   */
  public function getCurrentTime(): int;

}
