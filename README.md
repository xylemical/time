# Time

Provides framework for time related functionality.

## Install

The recommended way to install this library is [through composer](http://getcomposer.org).

```sh
composer require xylemical/time
```

## Usage

The framework provides clocks, micro-clocks, current time and timers.

### Clocks

Clocks are a named fixed point in time in seconds.

#### Usage

```php
use Xylemical\Time\Clock;

$clock = new Clock('name'); // Defaults to current time.
$clock->setTimestamp(strtotime('+1 month')); // Changes the timestamp to one month from now.

$clock = new Clock('name', strtotime('+1 day')); // Clock has timestamp for +1 day.
```

### Micro-Clocks

Micro-clocks are a named fixed point in time in microseconds.

#### Usage
```php
use Xylemical\Time\MicroClock;

$clock = new MicroClock('name'); // Defaults to current microtime.
$clock->setTime(microtime(TRUE)); // Changes the time to the current microtime.

$clock = new MicroClock('name', microtime(TRUE)); // Clock has current microtime.
```

### Timers

Timers are a named stopwatch using microtime.

#### Usage
```php
use Xylemical\Time\Timer;

$timer = new Timer('name'); // Timers are not started by default.
$timer->start();            // Starts the timer.
$timer->stop();             // Stops the timer.

echo $timer->getTime();         // Current the time as microtime.
echo $timer->getSeconds();      // Get the seconds for the timer.
echo $timer->getMicroseconds(); // Get the microseconds for the timer.


$timer->reset(); // R

$clock = new MicroClock('name', microtime(TRUE)); // Clock has current microtime.
```

## License

MIT, see LICENSE.
