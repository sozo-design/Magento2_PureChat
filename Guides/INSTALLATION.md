# Magento 2 PureChat Module Install Guide

**Using Composer:**
1. You will need to have an active [PureChat account](http://bit.ly/2tXKIUM) to setup the plugin.
1. Go to your Magento 2 root folder
1. Type the follosing command to install the plugin `composer require sozodesign/magento2-purechat`
1. Enable the module `php -f bin/magento module:enable --clear-static-content Sozo_PureChat`
1. Database updates `php -f bin/magento setup:upgrade` 
1. Configure the module in the Magento 2 Admin. Go to Stores -> Configuration -> SOZO Extensions -> PureChat

**Cloning from GitHub**
1. You will need to have an active [PureChat account](http://bit.ly/2tXKIUM) to setup the plugin.
1. Go to your Magento 2 root folder
1. Type `git clone git@github.com:clivewalkden/Magento2_PureChat.git vendor/sozodesign/magento2-purechat`
1. Enable the module `php -f bin/magento module:enable --clear-static-content Sozo_PureChat`
1. Database updates `php -f bin/magento setup:upgrade` 
1. Configure the module in the Magento 2 Admin. Go to Stores -> Configuration -> SOZO Extensions -> PureChat