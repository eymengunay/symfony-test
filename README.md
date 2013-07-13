# Symfony Test Edition

Welcome to the Symfony Test Edition - a light-weight Symfony2 application that you can use as the skeleton for your bundle tests.

This document contains information on how to download, install, and start using Symfony Test Edition.

## Install & Configure

### Step 1: Add Symfony Test Edition to your project using composer

```
# composer.json
{
    "require-dev": {
        "eo/symfony-test": "dev-master"
    }
}
```

Now tell composer to download the added package by running the command:

```
$ php composer.phar update eo/symfony-test
```

Composer will install the package to your project's vendor/eo directory.

### Step 2: Configure PHPUnit
Example phpunit.xml configuration:

```
<?xml version="1.0" encoding="UTF-8"?>
<!-- phpunit.xml -->
<phpunit backupGlobals="false"
         backupStaticAttributes="false"
         colors="true"
         convertErrorsToExceptions="true"
         convertNoticesToExceptions="true"
         convertWarningsToExceptions="true"
         processIsolation="false"
         stopOnFailure="false"
         syntaxCheck="false"
         bootstrap="Tests/bootstrap.php"
>
    <testsuites>
        <testsuite name="Your Bundle Test Suite">
            <directory>./Tests/</directory>
        </testsuite>
    </testsuites>
 
    <php>
        <server name="KERNEL_DIR" value="./vendor/eo/symfony-test-edition/app" />
    </php>
</phpunit>
```

### Step 3: Bootstrap your tests (optional)
Now that you have properly installed Symfony Test Edition and configured PHPUnit, the next (optional) step is to create a bootstrap file for your custom configuration and bundles.

Add the following configuration to your `config.yml` file:

```
<?php
// Tests/bootstrap.php
function registerContainerConfiguration($loader) {
    // If you need additional configuration
    // parameters you can load it here as you would normally do
    // with the Symfony Standard Edition
    // This function is optional.

    // A simple example:
    $loader->load(__DIR__ . "/config.yml");
}

function registerBundles() {
    // If you need to register additional
    // bundles add them here as you would normally do
    // with the Symfony Standard Edition
    // This function is optional.

    // A simple example:
    return array(
        new Acme\DemoBundle\AcmeDemoBundle(),
    );
}
?>
```

## Usage
You are now ready for executing your tests. For a real-world example you can have a look at [PassbookBundle](https://github.com/eymengunay/PassbookBundle).

## License
This bundle is under the MIT license. See the complete license in:

```
./LICENSE
```

## Reporting an issue or a feature request
Issues and feature requests related to this bundle are tracked in the Github issue tracker https://github.com/eymengunay/PassbookBundle/issues. PHP-Passbook related issues and requests should be opened under php-passbook library repository: https://github.com/eymengunay/php-passbook/issues