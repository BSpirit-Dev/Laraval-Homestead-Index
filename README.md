# Vagrant - Laravel Homestead Index Page

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Language: [English](https://github.com/Spit-Biagio/Laraval-Homestead-Index/blob/master/README.md "English"), [Italian](https://github.com/Spit-Biagio/Laraval-Homestead-Index/blob/master/README.it-IT.md "Italian")

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
- Navigate inside your browser to:
    ```sh
    127.0.0.1:8000
    ```
- Now Click button Visit Website for open a page with the target of your website 

### More information:
 Inside your Homestead.yaml you can add more information about your website, like the Name
 ```sh
 sites:
    - map: homestead
      to: /home/vagrant/Code/Project/public
      name: Index
 ```
for editing this information, add or remove inside Index.php need just edit or remove the lines about missing value:
```sh
<!---------!>
            //Remove or edit this line
            <h3 class="display-5 text-center text-black-50"><?php echo $test1['name']; ?></h3> 
<!----------!>
```

## Preview of Index Page

![](https://raw.githubusercontent.com/Spit-Biagio/Laraval-Homestead-Index/master/Preview.png)


   [Laravel/Homestead]: <https://github.com/laravel/homestead>
   [Php Yaml]: <http://php.net/manual/en/book.yaml.php>
   [Vagrant]: <https://www.vagrantup.com/downloads.html>
