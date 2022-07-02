<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides the current time.
 */
class Current implements CurrentInterface {

  /**
   * {@inheritdoc}
   */
  public function getCurrentTime(): int {
    return time();
  }

}
