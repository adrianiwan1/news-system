<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Postęp prac

### 13.05.2020 - Podział szablonu
Został stworozny podział szablonu, aby w łatwy sposób móc korzystać z jego poszczególnych części
- Head
- Footer
- Widok pełnego artykułu
- logo z menu
- widok pojedyńczego artykułu na stronie głównej
### 14.05.2020 - Stworzenie dynamicznie tworoznych podstron z artykułami

Stworzyłem dynamiczne tworzenie podstron(stronnicowanie) z wykorzystaniem wbudowanych opcji framework'a Ralavel oraz nioestandardowym widokiem
### 15.05.2020 - Stworzenie dynamicznie generowanych stron z pełną trescią artykułu

Została stworzona klasa w kontrolerze pozwalająca na dynamiczne tworzenie pełnej strony artykułu na podstawie wskazanego ID.
W adresie url zostaje wyświetlona wartość, która jest identyfikatorem artykułu (http://example/***). Zamiast gwiazdek występuje dane ID.
Pozwala to na dodawanie znacznej ilości artykułów bez konieczności ręcznego dodawania trasy dla każdej z podstron jego pełnej zawartości.
![Desktop 2022 05 15 - 23 41 10 03](https://user-images.githubusercontent.com/77799976/168495852-7f54217e-caf9-47e8-ab0b-636ab0f9d25f.gif)

### 16.05.2020 - Stworzenie formulaża do rejestracji

Przygotowanie do stworzenia pełnej rejestracji

### 23.05.2020 - Ukończenie procesu rejestracji

Stworzenie całęgo procesu rejestracji oraz logowania wraz z widokami. W tym celu użyto fastady Auth oraz wbudowanych opcji ralavela do tworzenia zapytać do i z bazy danych. Dzięki takiemu rozwiązaniu można bez problemu wtkożystać pobranie dane użytkownika z wykorzystaniem metod klasy Auth w całm projekcie.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
