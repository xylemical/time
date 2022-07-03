<?php

declare(strict_types=1);

namespace Xylemical\Time;

use function floor;
use function microtime;

/**
 * Provides a generic micro-clock.
 */
class MicroClock implements MicroClockInterface {

  /**
   * The micro-clock name.
   *
   * @var string
   */
  protected string $name;

  /**
   * The micro-clock time.
   *
   * @var float
   */
  protected float $time;

  /**
   * MicroClock constructor.
   *
   * @param string $name
   *   The micro-clock.
   * @param float|null $time
   *   The float or current micro-time.
   */
  public function __construct(string $name, ?float $time = NULL) {
    $this->name = $name;
    $this->time = $time ?? microtime(TRUE);
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
  public function getTime(): float {
    return $this->time;
  }

  /**
   * {@inheritdoc}
   */
  public function setTime(float $time): static {
    $this->time = $time;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getSeconds(): int {
    return intval(floor($this->time));
  }

  /**
   * {@inheritdoc}
   */
  public function getMicroseconds(): int {
    return intval(floor(($this->time - $this->getSeconds()) * 1000000));
  }

  /**
   * {@inheritdoc}
   */
  public function getMilliseconds(): int {
    return intval(floor(($this->time - $this->getSeconds()) * 1000));
  }

}
