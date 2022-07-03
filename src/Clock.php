<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a clock.
 */
class Clock implements ClockInterface {

  /**
   * The clock name.
   *
   * @var string
   */
  protected string $name;

  /**
   * The timestamp.
   *
   * @var int
   */
  protected int $time;

  /**
   * Clock constructor.
   *
   * @param string $name
   *   The name.
   * @param int|null $time
   *   The time for the clock.
   */
  public function __construct(string $name, ?int $time = NULL) {
    $this->name = $name;
    $this->time = $time ?? time();
  }

  /**
   * {@inheritdoc}
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * {@inheritdoc}
   */
  public function getTimestamp(): int {
    return $this->time;
  }

  /**
   * {@inheritdoc}
   */
  public function setTimestamp(int $timestamp): static {
    $this->time = $timestamp;
    return $this;
  }

}
