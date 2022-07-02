<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a timer.
 */
interface TimerInterface {

  /**
   * Get the timer name.
   *
   * @return string
   *   The name.
   */
  public function getName(): string;

  /**
   * Get the number of seconds passed.
   *
   * @return int
   *   The seconds.
   */
  public function getSeconds(): int;

  /**
   * Get the microseconds.
   *
   * @return int
   *   The microseconds.
   */
  public function getMicroseconds(): int;

  /**
   * Starts the timer.
   *
   * @return $this
   */
  public function start(): static;

  /**
   * Stops the timer.
   *
   * @return $this
   */
  public function stop(): static;

  /**
   * Reset the timer.
   *
   * @return $this
   */
  public function reset(): static;

  /**
   * Check the timer is running.
   *
   * @return bool
   *   The result.
   */
  public function isRunning(): bool;

}
