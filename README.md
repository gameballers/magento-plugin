
# Gameball Magento Plugin
> This Gameball Magento Plugin allows stores on magento platform to integrate with gameball by requiring its package using composer 

## Table of contents
* [Extension installation](#extension-installation)
* [How to see the results](#how-to-see-the-results)
* [Unit tests](#unit-tests)

## Extension installation 
Run the following command inside the root directory of magento to install the extension.
` composer require gameball/magento-plugin`
Afterwards run magento upgrade and deploy commands
` php bin/magento setup:upgrade`
` php bin/magento setup:static-content:deploy -f`

## How to see the results
Go to the backend in magento's admin panel, then navigate to Stores -> Configurations -> Customers
You should find Gameball listed in the side menu

## Unit tests
To run unit tests first make sure phpunit is installed in your magento directory or run the following command:  
` composer require phpunit/phpunit`  
To run the tests run the following command in the root directory:   
` php vendor/phpunit/phpunit/phpunit -c dev/tests/unit/phpunit.xml`



