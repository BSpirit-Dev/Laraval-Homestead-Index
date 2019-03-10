# Laravel Homestead - Index Page

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

This is a simple php file that placed inside your /Code/Project/public allow you to have an Homepage that will show all site available inside your Homestead.yaml


#### what you need:

* [Laravel/Homestead] Install Homestead 
* [Php Yaml] Install Php Yaml extension

# First Step!

- Download and install [Vagrant] && [Laravel/Homestead]
- After login into your Vagrant box
    ```sh
    $ vagrant ssh
    ```
- Install [Php Yaml] extension with the following command:
    ```sh
    $ sudo apt-get install php7.X-yaml
    ```
    you can also follow this guide: https://serverpilot.io/docs/how-to-install-the-php-yaml-extension
    
- After you will need just place this files inside your Project/public folder



   [Laravel/Homestead]: <https://github.com/laravel/homestead>
   [Php Yaml]: <http://php.net/manual/en/book.yaml.php>
   [Vagrant]: <https://www.vagrantup.com/downloads.html>
