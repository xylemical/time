<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a service collector clock manager.
 */
class ClockManager implements ClockManagerInterface {

  /**
   * The clocks.
   *
   * @var \Xylemical\Time\ClockInterface[]
   */
  protected array $clocks = [];

  /**
   * {@inheritdoc}
   */
  public function getClock(string $name): ?ClockInterface {
    return $this->clocks[$name] ?? NULL;
  }

  /**
   * Adds a clock to the manager.
   *
   * @param \Xylemical\Time\ClockInterface $clock
   *   The clock manager.
   *
   * @return $this
   */
  public function addClock(ClockInterface $clock): static {
    $this->clocks[$clock->getName()] = $clock;
    return $this;
  }

}
