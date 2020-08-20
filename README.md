![tests](https://github.com/jeyroik/extas-operations/workflows/PHP%20Composer/badge.svg?branch=master&event=push)
![codecov.io](https://codecov.io/gh/jeyroik/extas-operations/coverage.svg?branch=master)
<a href="https://github.com/phpstan/phpstan"><img src="https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat" alt="PHPStan Enabled"></a> 
<a href="https://codeclimate.com/github/jeyroik/extas-operations/maintainability"><img src="https://api.codeclimate.com/v1/badges/ef23e309a3c72e8dccc4/maintainability" /></a>

# Описание

Пакет с моделями абстрактной операции, которую можно заточить под необходимые нужды с помощью использования параметров и тегов.

# Использование

```php
use extas\components\operations\Operation;
$operation = new Operation();
$operation->run('arg1', '...', 'argN');
```