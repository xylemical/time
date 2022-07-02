<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides service collector timer manager.
 */
class TimerManager implements TimerManagerInterface {

  /**
   * The timers.
   *
   * @var \Xylemical\Time\TimerInterface[]
   */
  protected array $timers = [];

  /**
   * {@inheritdoc}
   */
  public function getTimer(string $name): ?TimerInterface {
    return $this->timers[$name] ?? NULL;
  }

  /**
   * Add a timer.
   *
   * @param \Xylemical\Time\TimerInterface $timer
   *   The timer.
   *
   * @return $this
   */
  public function addTimer(TimerInterface $timer): static {
    $this->timers[$timer->getName()] = $timer;
    return $this;
  }

}
