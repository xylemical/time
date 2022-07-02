<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a timer manager.
 */
interface TimerManagerInterface {

  /**
   * Get the timer by name.
   *
   * @param string $name
   *   The timer.
   *
   * @return \Xylemical\Time\TimerInterface|null
   *   The timer or NULL.
   */
  public function getTimer(string $name): ?TimerInterface;

}
