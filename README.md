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
- [assertAttribute](#assertattribute) – Ensures an element has the expected attribute and value.
- [assertDontSee](#assertdontsee) – Ensures the given text is not present on the page.


#### assertAttribute

Assert that the specified element has the expected attribute and value:

```php
test('assert has expected attribute', function () {
    $url = 'https://laravel.com';

    $this->visit($url)
        ->assertAttribute('html', 'data-theme', 'light');
});
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

#### assertQueryStringHas

Assert that the given query string is present in the url:

```php
test('assert query string has', function () {
    $url = 'https://laravel.com?q=test';
    $this->visit($url)
        ->assertQueryStringHas('q', 'test');
});
```

#### assertQueryStringMissing

Assert that the given query string is not present in the url:

```php
test('assert query string missing', function () {
    $url = 'https://laravel.com?q=test';
    $this->visit($url)
        ->assertQueryStringMissing('q', 'test-1');
});
```
