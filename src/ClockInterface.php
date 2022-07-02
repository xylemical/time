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
   * Get the clock time.
   *
   * @return \Xylemical\Time\DateTimeInterface
   *   The datetime.
   */
  public function getTime(): DateTimeInterface;

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
   * @param \Xylemical\Time\DateTimeInterface $datetime
   *   The time.
   *
   * @return $this
   */
  public function setTime(DateTimeInterface $datetime): static;

}
