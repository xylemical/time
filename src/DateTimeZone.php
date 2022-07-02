<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides extension of \DateTimeZone.
 */
class DateTimeZone extends \DateTimeZone {

  /**
   * Creates a DateTimeZone from the in-built version.
   *
   * @param \DateTimeZone $timezone
   *   The timezone.
   *
   * @return \Xylemical\Time\DateTimeZone
   *   The datetime zone.
   */
  public static function createFrom(\DateTimeZone $timezone): DateTimeZone {
    return new DateTimeZone($timezone->getName());
  }

}
