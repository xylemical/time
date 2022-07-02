<?php

declare(strict_types=1);

namespace Xylemical\Time;

use PHPUnit\Framework\TestCase;
use function date_default_timezone_get;

/**
 * Tests \Xylemical\Time\DateTimeFactory.
 */
class DateTimeFactoryTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $timezone = date_default_timezone_get();
    $altTimezone = $timezone === 'UTC' ? 'EST' : 'UTC';

    $factory = new DateTimeFactory();
    $this->assertEquals($timezone, $factory->getDefaultTimezone()->getName());

    $timestamp = strtotime('2022-07-02T12:00:00Z');
    $result = $factory->create($timestamp);
    $this->assertEquals($timezone, $result->getTimezone()->getName());

    $result = $factory->create($timestamp, $altTimezone);
    $this->assertEquals($altTimezone, $result->getTimezone()->getName());

    $result = $factory->createFromFormat('Y-m-d', '2022-02-07');
    $this->assertNotNull($result);
    $this->assertEquals('2022', $result->format('Y'));

    $result = $factory->createFromFormat('Y-m-d', '2022:02:07');
    $this->assertNull($result);

    $timezone = new DateTimeZone($altTimezone);
    $factory->setDefaultTimezone($timezone->getName());
    $this->assertEquals($altTimezone, $factory->getDefaultTimezone()->getName());
  }

}
