<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a generic wrapper for \DateTime.
 */
class DateTime extends \DateTime implements DateTimeInterface {

  /**
   * {@inheritdoc}
   */
  public function getTimezone() {
    return DateTimeZone::createFrom(parent::getTimezone());
  }

  /**
   * Create from a built-in DateTime object.
   *
   * @param \DateTime $date
   *   The DateTime object.
   *
   * @return \Xylemical\Time\DateTime
   *   The datetime object.
   *
   * @throws \Exception
   */
  public static function createFrom(\DateTime $date): DateTime {
    return new DateTime($date->format(\DateTimeInterface::RFC3339_EXTENDED));
  }

}
