[![Codacy Badge](https://app.codacy.com/project/badge/Grade/bc8c1ba4e46b46379505afca891164fb)](https://www.codacy.com/gh/packlink-dev/shopware_module?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=packlink-dev/shopware_module&amp;utm_campaign=Badge_Grade)

![Packlink logo](https://pro.packlink.es/public-assets/common/images/icons/packlink.svg)

# Packlink Shopware plugin

# Development info

## Run unit tests
Configuration for phpunit is in the `.Packlink/phpunit.xml` file.

To be able to run unit tests, development installation of Shopware is required. To install development Shopware instance
follow instructions provided [here](https://github.com/shopware/shopware)

Once development Shopware instance is running, go and install Packlink plugin using backend interface.
 
To ensure that test cases are present copy complete ./Packlink folder to Shopware installation
custom/plugins/Packlink folder.

If you haven't already done so, you can setup unit tests in PHPStorm.
To do so, first go to `File > Settings > Languages & Frameworks > PHP > Test Frameworks` and 
add new PHPUnit Local configuration. Select `Use composer autoloader` and in the field below navigate to your Shopware 
installation folder and select `/vendor/autoload.php` file.

Go to `Run > Edit configuration` menu and add new PHPUnit configuration. 
For Test Runner options select `Defined in configuration file` and add Packlink plugin specific phpunit configuration 
file path to the `./custom/plugins/Packlink/phpunit.xml` file.

Now test configuration is set and you can run tests by activating run command from the 
top right toolbar. 

**All tests must pass.**
