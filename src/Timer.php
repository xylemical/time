<?php

declare(strict_types=1);

namespace Xylemical\Time;

use function microtime;

/**
 * Provides timer mechanisms.
 */
class Timer implements TimerInterface {

  /**
   * The timer name.
   *
   * @var string
   */
  protected string $name;

  /**
   * The current execution time.
   *
   * @var float
   */
  protected float $length = 0.0;

  /**
   * The last timer was started.
   *
   * @var float
   */
  protected float $last = 0.0;

  /**
   * The timer is running.
   *
   * @var bool
   */
  protected bool $running = FALSE;

  /**
   * Timer constructor.
   *
   * @param string $name
   *   The timer name.
   */
  public function __construct(string $name) {
    $this->name = $name;
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
  public function getSeconds(): int {
    return intval(floor($this->length));
  }

  /**
   * {@inheritdoc}
   */
  public function getMicroseconds(): int {
    return intval($this->length * 1000000) % 1000000;
  }

  /**
   * {@inheritdoc}
   */
  public function start(): static {
    if (!$this->running) {
      $this->last = microtime(TRUE);
      $this->running = TRUE;
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function stop(): static {
    if ($this->running) {
      $last = microtime(TRUE);
      $this->length += $last - $this->last;
      $this->last = 0.0;
      $this->running = FALSE;
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function reset(): static {
    if (!$this->running) {
      $this->length = 0;
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function isRunning(): bool {
    return $this->running;
  }

}
