<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a clock.
 */
interface ClockInterface {

  /**
   * Get the name of the clock.
   *
   * @return string
   *   The name.
   */
  public function getName(): string;

  /**
   * Get the clock time as a unix timestamp.
   *
   * @return int
   *   The timestamp.
   */
  public function getTimestamp(): int;

  /**
   * Set the clock time.
   *
   * @param int $timestamp
   *   The timestamp.
   *
   * @return $this
   */
  public function setTimestamp(int $timestamp): static;

}
