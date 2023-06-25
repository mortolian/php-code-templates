# PHP Design Templates

This is a library of example code I use to start or plan projects in PHP.
It makes the setup quicker and I can reference back to code examples if I am not clear on something I don't use very
often.

### How To Use This Repo

This repo is simply a place where one can refer back to. There are also some bits of code that will help you get started
Some IDE's and plugins will also do this and may work better.

### Usage Agreement

Please use this repo in any way you like. I would appreciate some credit or stars if you found it useful.

## Design Pattern Sample Code

These are simple examples of design patterns used in PHP and also in popular libraries like Laravel and Symfony. Each
one of the examples is a small project on its own.

All code assumes PHP version 8.2.

- [Singleton Design Pattern](design-patterns/singleton/README.md)

## PHP Basic Object Orientated Sample Code

This is a single app which will have several samples for object orientated PHP code in it. This is useful for
referencing back to and a great place to practice new PHP language features.

## Quickstart Project Boilerplate

This is the setup of a boilerplate project to get started with a project from scratch.

## PHP Module Boilerplate

This is a boilerplate to quickly get started with a simple PHP Module which can be published
on [Packagegist](https://packagist.org/).

## Laravel Module Boilerplate

A quickstart boilerplate to create a new Laravel module.

## CLI Boilerplate

This is a boilerplate for a CLI application created in PHP.

## Symfony var-dumper

A very nice var dumper which can easily be added to projects to make them simpler to debug.

- https://packagist.org/packages/symfony/var-dumper

```bash
composer require symfony/var-dumper
```

Now you can use the `dd()` method just like you would in something like Symfony or Laravel.

```php
dd($someVariable);
```

## PHPUnit Setup

- https://packagist.org/packages/phpunit/
- https://packagist.org/packages/phpunit/php-code-coverage
- https://packagist.org/packages/phpunit/phpcov

```bash
composer require --dev phpunit/phpunit
```

## Other PHP Helper Templates

### Licence Templates

- https://docs.github.com/en/communities/setting-up-your-project-for-healthy-contributions/adding-a-license-to-a-repository
- https://docs.github.com/en/rest/licenses?apiVersion=2022-11-28
- https://choosealicense.com/

### .editorconfig

EditorConfig helps maintain consistent coding styles for multiple developers working on the same project across various
editors and IDEs. The EditorConfig project consists of a file format for defining coding styles and a collection of text
editor plugins that enable editors to read the file format and adhere to defined styles. EditorConfig files are easily
readable and they work nicely with version control systems.

- [.editorconfig Site](https://editorconfig.org/)
- [Github Page](https://github.com/editorconfig/)

### Humans.txt

It's an initiative for knowing the people behind a website. It's a TXT file that contains information about the
different people who have contributed to building the website.

- [Humans.txt Starter Template](https://humanstxt.org/humans.txt)
- [Humans.txt Quick Start](https://humanstxt.org/Standard.html)
- [Humand.txt Community Site](https://humanstxt.org/)

### HTML5 Boilerplate

- [HTML5BOILERPLATE](https://html5boilerplate.com/) - HTML5 Boilerplate helps you build fast, robust, and adaptable web
  apps or sites. Kick-start your project with the combined knowledge and effort of 100s of developers, all in one little
  package.B