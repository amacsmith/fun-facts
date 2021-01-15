# Chuck Norris Jokes

fetch random fun facts.

[![Build Status](https://travis-ci.org/amacsmith/chuck-norris-jokes.svg?branch=master)](https://travis-ci.org/amacsmith/chuck-norris-jokes)

[![codecov](https://codecov.io/gh/amacsmith/chuck-norris-jokes/branch/master/graph/badge.svg)](https://codecov.io/gh/amacsmith/chuck-norris-jokes)

## Installation

Require using composer:

```bash
composer require amacsmith/fun-facts
```

## Usage

```php
use AMacSmith\FunFacts\FunFactFactory;

$factFactory = new FunFactFactory();

$fact = $factFactory->getFunFact();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)