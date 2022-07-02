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
   * The calculated time.
   *
   * @var \Xylemical\Time\DateTimeInterface
   */
  protected DateTimeInterface $datetime;

  /**
   * Clock constructor.
   *
   * @param string $name
   *   The name.
   * @param int|null $time
   *   The time for the clock.
   * @param \Xylemical\Time\DateTimeFactoryInterface|null $factory
   *   The date time factory.
   */
  public function __construct(string $name, ?int $time = NULL, ?DateTimeFactoryInterface $factory = NULL) {
    $this->name = $name;
    if (is_null($factory)) {
      $factory = new DateTimeFactory();
    }
    if (is_null($time)) {
      $time = time();
    }
    $this->datetime = $factory->create($time);
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
  public function getTime(): DateTimeInterface {
    return $this->datetime;
  }

  /**
   * {@inheritdoc}
   */
  public function getTimestamp(): int {
    return $this->datetime->getTimestamp();
  }

  /**
   * {@inheritdoc}
   */
  public function setTime(DateTimeInterface $datetime): static {
    $this->datetime = $datetime;
    return $this;
  }

}
