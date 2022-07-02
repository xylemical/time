<?php

declare(strict_types=1);

namespace Xylemical\Time;

use function date_create_from_format;

/**
 * Provides a date time factory.
 */
class DateTimeFactory implements DateTimeFactoryInterface {

  /**
   * The default timezone.
   *
   * @var \Xylemical\Time\DateTimeZone
   */
  protected DateTimeZone $defaultTimeZone;

  /**
   * DateTimeFactory constructor.
   *
   * @param string|null $defaultTimeZone
   *   The default timezone.
   */
  public function __construct(?string $defaultTimeZone = NULL) {
    $this->defaultTimeZone = new DateTimeZone($defaultTimeZone ?? date_default_timezone_get());
  }

  /**
   * {@inheritdoc}
   */
  public function create(int $timestamp, ?string $timezone = NULL): DateTimeInterface {
    $timezone = $timezone ? new DateTimeZone($timezone) : $this->defaultTimeZone;
    return new DateTime(date('Y:m:d H:i:s', $timestamp), $timezone);
  }

  /**
   * {@inheritdoc}
   */
  public function createFromFormat(string $format, string $date): ?DateTimeInterface {
    if ($result = date_create_from_format($format, $date)) {
      return DateTime::createFrom($result);
    }
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultTimezone(): DateTimeZone {
    return $this->defaultTimeZone;
  }

  /**
   * {@inheritdoc}
   */
  public function setDefaultTimezone(string $timezone): static {
    $this->defaultTimeZone = new DateTimeZone($timezone);
    return $this;
  }

}
