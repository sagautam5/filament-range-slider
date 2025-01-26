# Filament Range Slider

A plugin to add range slider field in filament forms.

## Installation

You can install the package via composer:

```bash
composer require ibrahimbougaoua/filament-rating-star
```

## Usage

```php
use Sagautam5\FilamentRangeSlider\Forms\Components\RangeSlider;
use Sagautam5\FilamentRangeSlider\Enums\RangeSliderSize;

RangeSlider::make('length')
    ->maxValue(50)
    ->minValue(0)
    ->step(2)
    ->accentColor('#ff2353')
    ->size(RangeSliderSize::MEDIUM)
    ->default(25);
```

## Credits

- [Sagar Gautam](https://github.com/sagautam5)
- [All Contributors](../../contributors)

## Security

If you discover a security vulnerability within this package, please send an e-mail to sagautam5@gmail.com, All security vulnerabilities will be promptly addressed.

## 🤝 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE) for more information.