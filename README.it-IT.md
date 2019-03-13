# Vagrant - Laravel Homestead Index Page

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Lingua: [Inglese](https://github.com/Spit-Biagio/Laraval-Homestead-Index/blob/master/README.md "Inglese"), [Italiano](https://github.com/Spit-Biagio/Laraval-Homestead-Index/blob/master/README.it-IT.md "Italiano")

Questa è un semplice php file the inserito all'interno della tua cartella /Code/Project/public permette di avere una homepage che permette di visuallizare tutti i siti presenti del tuo Homestead.yaml

#### Di cosa hai bisogno?:

* [Laravel/Homestead] Installare Homestead 
* [Php Yaml] Installare Php Yaml estensione

# Primo Step!

- Scarica e installa [Vagrant] && [Laravel/Homestead]
- Dopo effettua il login via ssh al tuo Vagrant box
    ```sh
    $ vagrant ssh
    ```
- Installa [Php Yaml] estensione seguendo il comando:
    ```sh
    $ sudo apt-get install php7.X-yaml
    ```
    puoi anche seguire questa guida più dettagliata: https://serverpilot.io/docs/how-to-install-the-php-yaml-extension
    
- Dopo dovrai solo inserire il codice dentro la cartella Project/public
- Naviga nel tuo browser all'indirizzo:
    ```sh
    127.0.0.1:8000
    ```
- Adesso clicca il bottone Visit Website, per aprire una nuova pagina con l'indirizzo del tuo sito. 

### Altre informazioni:
 All'interno il tuo Homestead.yaml tu puoi inserire diversi cambi per aggiungere più informazioni, come il nome
 ```sh
 sites:
    - map: homestead
      to: /home/vagrant/Code/Project/public
      name: Index
 ```
per modificare questa informazioni, aggiungere o rimuovere il codice all'interno del file Index.php, rimuovi o modifica questa linea per l'info del nome
```sh
<!---------!>
            //Remove or edit this line
            <h3 class="display-5 text-center text-black-50"><?php echo $test1['name']; ?></h3> 
<!----------!>
```

## Preview della pagina di Index

![](https://raw.githubusercontent.com/Spit-Biagio/Laraval-Homestead-Index/master/Preview.png)


   [Laravel/Homestead]: <https://github.com/laravel/homestead>
   [Php Yaml]: <http://php.net/manual/en/book.yaml.php>
   [Vagrant]: <https://www.vagrantup.com/downloads.html>
