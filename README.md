# Chuck Norris Jokes

Create chuck norris jokes in your next PHP project.

## Installation

Require the package using composer:

```bash
composer require ahmadwaleed/chuknorisjokes
```

## Usage

```php
use AhmadWaleed\ChuckNorrisJokes\JokeFactory;

$factory = new JokeFactory();

$joke = $factory->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENCE.md)
