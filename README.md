# Dekasender API

Unofficial PHP wrapper for sender.dekacare.id

## Table Of Contents

- [Dekasender API](#dekasender-api)
  - [Table Of Contents](#table-of-contents)
  - [Installation](#installation)
    - [Laravel](#laravel)
  - [Usage](#usage)
  - [Laravel Usage](#laravel-usage)

## Installation

install the package

```bash
composer require dekate/dekasender
```

### Laravel

publish the config file to be used in Laravel project

```bash
php artisan vendor:publish --tag=dekasender
```

add `DEKASENDER_API_KEY` to your .env

## Usage

To use the package, create an instance of either `Dekasender/Whatsapp`, `Dekasender/Sms`, or `Dekasender/Email` depending on your implementation

Ensure the receiver's number is composed solely of digits, begins with a country code, and doesn’t start with 0. It should not contain any symbols, whether they are plus signs, spaces, or dashes.

```php
use Dekasender/Whatsapp;
use Dekasender/Sms;
use Dekasender/Email;

// ...

$whatsappClient = new Whatsapp("MY_API_KEY");
$smsClient = new Whatsapp("MY_API_KEY");
$emailClient = new Whatsapp("MY_API_KEY");

$resultWhatsapp = $whatsappClient->sendMessage('880123456789', 'Hello World!');
$resultSms = $smsClient->sendSms('880123456789', 'Hello World!');
$resultEmail = $emailClient->sendEmail("receiver@email.com", "Subject", "Message", "sender", "demo@example.com")

$resultBody = $result->body;
```

## Laravel Usage

```php
use Dekasender/Facade/Whatsapp;
use Dekasender/Facade/Sms;
use Dekasender/Facade/Email;

// ...

$resultWhatsapp = Whatsapp::sendMessage('880123456789', 'Hello World!');
$resultSms = Sms::sendSms('880123456789', 'Hello World!');
$resultEmail = Email::sendEmail("receiver@email.com", "Subject", "Message", "sender", "demo@example.com")
```
