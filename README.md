# PHP Design Templates

This is a library of example code I use to start or plan projects in PHP.
It makes the setup quicker and I can reference back to code examples if I am not clear on something I don't use very often.

## How To Use This Repo

This repo is simply a place where you can come back to when you cannot remember something you don't use every day. There are also some bits of code you can checkout into a new project directory and get going much quicker.

With boilerplates I recommend starting a new project directory where you plan to develop your project and then run the GIT clone command provided. Then you may have to run a few commands to get setup and you should be ready to start.

For more complex setups, there may be a setup script to simplify things a bit more. This repo favours Linux and Mac users. Windows users may have to adjust the instructions a bit.

## Design Pattern Sample Code

These are simple examples of design patterns used in PHP and also in popular libraries like Laravel and Symfony. Each one of the examples is a small project of it's own.

## Quickstart Project Boilerplate

This is the setup of a boilerplate project to get started with a project from scratch.

```bash
# cmd to checkout just this part of the repo without GIT files
```

## PHP Module Boilerplate

This is a boilerplate to quickly get started with a simple PHP Module which can be published on [Packagegist](https://packagist.org/).

```bash
# cmd to checkout just this part of the repo without GIT files
```

## Laravel Module Boilerplate

A quickstart boilerplate to create a new Laravel module.

```bash
# cmd to checkout just this part of the repo without GIT files
```

## CLI Boilerplate

This is a boilerplate for a CLI application created in PHP.

## Symfony var-dumper

A very nice var dumper which can easily be added to projects to make them simpler to debug.

- <https://packagist.org/packages/symfony/var-dumper>

```bash
composer require symfony/var-dumper
```

Now you can use the `dd()` method just like you would in something like Symfony or Laravel.

```php
dd($someVariable);
```

## PHPUnit Setup

- <https://packagist.org/packages/phpunit/>
- <https://packagist.org/packages/phpunit/php-code-coverage>
- <https://packagist.org/packages/phpunit/phpcov>

```bash
composer require --dev phpunit/phpunit
```

## Licence Templates

- <https://docs.github.com/en/communities/setting-up-your-project-for-healthy-contributions/adding-a-license-to-a-repository>
- <https://docs.github.com/en/rest/licenses?apiVersion=2022-11-28>
- <https://choosealicense.com/>

## Useage Agreement

Please use this repo in any way you like. I would appreciate some credit or stars if you found it useful.
