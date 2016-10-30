Simple Symfony 3.1.6 for backend and AngularJS 1.5.8 for frontend.
=======

A Symfony project created on October 30, 2016, 12:38 pm.

# Install
- git clone https://github.com/dancostinel/symfony-angular.git
- ``$ composer install``
- you will be asked to enter your db credentials
- ``$ bower install``
- ``$ php bin/console doctrine:database:create``
- ``$ php bin/console doctrine:schema:update --force``
- insert some dummy data in the ``persons`` table
- ``$ php bin/console server:run``
- access: ``127.0.0.1:8000/`` in your favorite browser.