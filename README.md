Strimoid
========

[![Join the chat at https://gitter.im/Strimoid/Strimoid](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/Strimoid/Strimoid) [![Build Status](https://semaphoreci.com/api/v1/strimoid/strimoid/branches/develop/shields_badge.svg)](https://semaphoreci.com/strimoid/strimoid) [![Test Coverage](https://codeclimate.com/github/Strimoid/Strimoid/badges/coverage.svg)](https://codeclimate.com/github/Strimoid/Strimoid) [![Code Climate](https://codeclimate.com/github/Strimoid/Strimoid/badges/gpa.svg)](https://codeclimate.com/github/Strimoid/Strimoid) [![Docker Repository on Quay](https://quay.io/repository/strimoid/strimoid/status "Docker Repository on Quay")](https://quay.io/repository/strimoid/strimoid)

Source code of Strm.pl, brand-new social service.

Requirements
========
* PHP 7 with intl, mbstring, openssl, pdo, pdo-mysql extensions
* MySQL (MariaDB 10.1 recommended, but might even work with PostgreSQL)

API
========
You can find API documentation at https://developers.strm.pl

Documentation
========
We are providing documentation generated automatically by Sami at https://sami.strm.pl

How to use?
========
* run:

```
composer create-project strimoid/strimoid --stability=dev
```

* edit .env file and then run:

```
php artisan migrate
```

To run web app from console use:

```
php artisan serve
```

To do
========
* [ ] Tests, tests, tests!
* [ ] Better frontend.
* [ ] Improve API: change routing, add more documentation, add ETags support.
* [ ] Many many other things...

Questions?
========
Just join #strimoid @ Freenode and feel free to ask.
