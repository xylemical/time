<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a service collector micro-clock manager.
 */
class MicroClockManager implements MicroClockManagerInterface {

  /**
   * The clocks.
   *
   * @var \Xylemical\Time\MicroClockInterface[]
   */
  protected array $clocks = [];

  /**
   * {@inheritdoc}
   */
  public function getClock(string $name): ?MicroClockInterface {
    return $this->clocks[$name] ?? NULL;
  }

  /**
   * Adds a micro-clock to the manager.
   *
   * @param \Xylemical\Time\MicroClockInterface $clock
   *   The clock manager.
   *
   * @return $this
   */
  public function addClock(MicroClockInterface $clock): static {
    $this->clocks[$clock->getName()] = $clock;
    return $this;
  }

}
