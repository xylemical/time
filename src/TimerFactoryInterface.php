<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a factory for timers.
 */
interface TimerFactoryInterface {

  /**
   * Creates a timer.
   *
   * @param string $name
   *   The timer name.
   *
   * @return \Xylemical\Time\TimerInterface
   *   The timer.
   */
  public function create(string $name): TimerInterface;

}
