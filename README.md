# Pest Plugin Browser

This repository contains the Pest Plugin Browser.
> If you want to start testing your application with Pest, visit the main **[Pest Repository](https://github.com/pestphp/pest)**.

## Community & Resources

- Explore our docs at **[pestphp.com »](https://pestphp.com)**
- Follow us on Twitter at **[@pestphp »](https://twitter.com/pestphp)**
- Join us at **[discord.gg/kaHY6p54JH »](https://discord.gg/kaHY6p54JH)** or **[t.me/+kYH5G4d5MV83ODk0 »](https://t.me/+kYH5G4d5MV83ODk0)**

## Installation (for development purposes)

1. Install PHP dependencies using Composer:
```bash
composer install
```

2. Install Node.js dependencies:
```bash
npm install
```

3. Install Playwright browsers:
```bash
npx playwright install
```

## Running Tests

To run the test suite, execute:
```bash
./vendor/bin/pest
```

## License

Pest is an open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.


## Documentation

Pest Plugin Browser brings end-to-end testing to the elegant syntax from Pest.
This allows to test your application in a browser environment, enabling to test all the components, such as frontend, backend and database.

### Installation

tbd

### Available Assertions
<a name="assert-attribute"></a>
<a name="assert-dont-see"></a>

#### assertAttribute

Assert that the specified element has the expected attribute and value:

```php
    $url = 'https://laravel.com';

    $this->visit($url)
        ->assertAttribute('html', 'data-theme', 'light');
```

#### assertDontSee

Assert that the given text is not present on the page:

```php
test('assert does not see', function () {
    $url = 'https://laravel.com';

    $this->visit($url)
        ->assertDontSee('we are a streaming service');
});
```
