README
======

What is Mamaframework?
----------------------

Mamaframework is a PHP 5.5 full-stack web framework. It is written with speed and
flexibility in mind. It allows developers to build better and easy to maintain
websites with PHP.

Mamaframework can be used to develop all kind of websites, from your personal blog
to high traffic ones.

Requirements
------------

Mamaframework is only supported on PHP 5.5 and up. Mamaframework 
needs a Database to manage Access Control List. This Database must be MySQL. 
Remmember to have the mod rewritte enable.

Installation
------------

- Download the last source version from master branch.
- Get database script from (tests -> src -> mamaframework.sql) and execute into new project database.
- Run tests to check if the framework is well configure. [Running Mamaframework Tests]

Getting Started
---------------

- Representation of directory structre with short description of what includes:
<code>
+-- _src  (bussines logic)
|   +-- _app (App logic)
|   +-- _mmf (Framework)
|   +-- _translate (PHP translation files)
|   +-- .htaccess
|   +-- config.ini (configuration of each Mmf module.
|   +-- error_page.html (Estandard error page, when framework is not available to load it's own error page)
|   +-- index.php (File which instantiates autoloader, frontcontroller, comunicator and config)   
|   +-- routing.ini (File, that conatins, controller, action and parser of response and request)
+-- _tests
|   +-- _src
|   |   +--_endtoend (basic tests to check if all is well configured)
|   |   +--_examples_config (examples of config and routing files that we could use in our projects)
|   |   +--include.common.functions.php (functions to simulated the curl request)
|   |   +--include.php (file with all the major classes instantiated)
|   |   +--mamaframework.sql (initial script to instantiate the database)
+-- _docu (documentation generated with APIGen)
+-- README.md
</code>




Documentation
-------------

Please read the documentation file of core functionalities, present in 
(Google drive > Mamasú Internal > Mamaframework > Documentation > Core Functionalitites) 
and class diagram stored in (Google drive > Mamasú Internal > Mamaframework > Documentation > class diagram > Mmframework).

### Config file

Config file is written using the .ini syntaxis. Basically is grouped by modules

```php
;Mamaframework Core and Application Libs
[app]

;Mamaframework application and plugin structure
[mmfStructure]

;Mamaframework plugin element with core classes
[plugin]

; Not working
[cache]

;Database directory
[db]

;Event directory and event main class
[event]

[healthChecker]

;Input/Ouput managed classes
[io]

;Log path
[log]

;Routing path with routing config path and main routing resoulver class
[routing]

;Session path and session manager
[session]

;ACL path and ACL manager
[acl]

;Authentication path and auth manager (MmfAuthAPI, MmfAuthBasic, MmfAuth, etc)
[auth]

;Language path and language manager classes
[language]

;MVC path, classes, script and css included by default.
[mvc]


;DB parameters all the database configurations
;Configuration of default database
[db_default]
```


### Controllers

the config file bla bla

### Models

the config file bla bla

### Views

the config file bla bla

Contributing
------------

Mamaframework is a private Mamasu project. 

Running Mamaframework Tests
---------------------------

- Install phpunit from https://phpunit.de page.
- Open the terminal, go to project directory and execute:  phpunit --color  tests/src/endtoend/ , 
if all goes right, a green message containing 'OK' will apearing.
- If wrong message apears with the message 'db connection error', make sure that config.ini parameters of database are correct and server is working fine.


FAQ
---