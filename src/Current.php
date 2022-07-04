<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides the current time.
 */
class Current implements CurrentInterface {

  /**
   * Provides the current time.
   *
   * @var int
   */
  protected int $time;

  /**
   * Current constructor.
   *
   * @param int|null $time
   *   The time.
   */
  public function __construct(?int $time = NULL) {
    $this->setCurrentTime($time);
  }

  /**
   * {@inheritdoc}
   */
  public function getCurrentTime(): int {
    return $this->time;
  }

  /**
   * Set the time.
   *
   * @param int|null $time
   *   The time.
   *
   * @return $this
   */
  public function setCurrentTime(?int $time): static {
    $this->time = $time ?? time();
    return $this;
  }

}
