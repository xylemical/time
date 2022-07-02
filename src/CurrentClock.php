<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides the current time using a clock.
 */
class CurrentClock implements CurrentInterface {

  /**
   * The current time as a clock.
   *
   * @var \Xylemical\Time\ClockInterface
   */
  protected ClockInterface $clock;

  /**
   * CurrentClock constructor.
   *
   * @param \Xylemical\Time\ClockInterface $clock
   *   The clock providing the time.
   */
  public function __construct(ClockInterface $clock) {
    $this->clock = $clock;
  }

  /**
   * {@inheritdoc}
   */
  public function getCurrentTime(): int {
    return $this->clock->getTimestamp();
  }

}
