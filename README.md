# Mage2 Module Flat101 PickUpPoints

    ``flat101/module-pickuppoints``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
A pick-up point is an entity with a name, address, latitude and longitude, location and associated shipping method stored in Magento 2.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Flat101`
 - Enable the module by running `php bin/magento module:enable Flat101_PickUpPoints`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require flat101/module-pickuppoints`
 - enable the module by running `php bin/magento module:enable Flat101_PickUpPoints`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Controller
	- adminhtml > flat101_pickuppoints/index/index

 - Controller
	- frontend > pickuppoints/index/index


## Attributes



