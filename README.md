<h1 align="center"> flight-iata-code </h1>

<p align="center"> .</p>


## Installing

```shell
$ composer require janpun/flight-iata-code -vvv
```

## Usage
### 航空公司解析
use Janpun\FlightIataCode\Airline;

$airline = new Airline();
$response = $airline->getNationalInfo('CA');

### 机场解析
use Janpun\FlightIataCode\Airport;

$airport = new Airport();
$response = $airport->getNationalInfo('PEK');

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/janpun/flight-iata-code/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/janpun/flight-iata-code/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT