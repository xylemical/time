<?php

declare(strict_types=1);

namespace Xylemical\Time;

/**
 * Provides a generic timer factory.
 */
class TimerFactory implements TimerFactoryInterface {

  /**
   * {@inheritdoc}
   */
  public function create(string $name): TimerInterface {
    return new Timer($name);
  }

}
