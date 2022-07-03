<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a clock with microseconds.
 */
interface MicroClockInterface {

  /**
   * Get the name of the micro-clock.
   *
   * @return string
   *   The name.
   */
  public function getName(): string;

  /**
   * Get the time value.
   *
   * @return float
   *   The time.
   */
  public function getTime(): float;

  /**
   * Set the time value.
   *
   * @param float $time
   *   The time.
   *
   * @return $this
   */
  public function setTime(float $time): static;

  /**
   * Get the seconds.
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
   * Get the milliseconds.
   *
   * @return int
   *   The milliseconds.
   */
  public function getMilliseconds(): int;

}
