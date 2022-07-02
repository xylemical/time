<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a date time factory.
 */
interface DateTimeFactoryInterface {

  /**
   * Create a datetime.
   *
   * @param int $timestamp
   *   The timestamp.
   * @param string|null $timezone
   *   The timezone.
   *
   * @return \Xylemical\Time\DateTimeInterface
   *   The date time.
   */
  public function create(int $timestamp, ?string $timezone = NULL): DateTimeInterface;

  /**
   * Creates a datetime from a format.
   *
   * @param string $format
   *   The datetime format.
   * @param string $date
   *   The date.
   *
   * @return \Xylemical\Time\DateTimeInterface|null
   *   The datetime or NULL.
   */
  public function createFromFormat(string $format, string $date): ?DateTimeInterface;

  /**
   * Get the default timezone.
   *
   * @return \Xylemical\Time\DateTimeZone
   *   The timezone.
   */
  public function getDefaultTimezone(): DateTimeZone;

  /**
   * Set the default timezone.
   *
   * @param string $timezone
   *   The timezone.
   *
   * @return $this
   */
  public function setDefaultTimezone(string $timezone): static;

}
