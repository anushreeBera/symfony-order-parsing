# Libraries used

https://libs.garden/php/raphaelstolt/json-lines

# MySale Coding Challenge 1

Hello, welcome, and congratulations on getting this far in the interview process! This stage is designed to test your knowledge of Symfony, coding style, and software development best practices.

## Task

The [coding-challenge-1.jsonl](coding-challenge-1.jsonl) file is in [jsonlines format](http://jsonlines.org) with each line representing an online order. Each order contains information about the customer, the shipping address, and the items in the order. The [coding-challenge-1.jsonl](coding-challenge-1.jsonl) file was generated using Mockaroo. The schema can be [found here](https://mockaroo.com/b51ce860).

You need to write a Symfony API that parses this file and returns a summary of the orders.

The response should be an array in JSON format that contains the following information for each order:

```
order_id            The ID of the order.
order_date          The date that the order was placed in the format of DD/MM/YYYY.
total_order_value   The total value of the items in the order, excluding shipping, with discounts applied. Note that discounts do not apply to shipping.
average_unit_price  The average unit price of the items in the order.
unit_count          The total number of units in the order.
customer_state      The state that the order was delivered to.
```

## Requirements

* Please complete the task using the latest version of PHP and Symfony.
* Create a *private* repository on GitHub to store your code and commit log.
* Commit regularly with informative messages.
* Create a README.md with anything you would like us to know about your code base. For example, perhaps you would like to explain why you chose a certain solution, or dependency, or which bonus points you attempted and why.
* The reviewer will execute the following commands to get your project initialised and running:

```shell
git clone $YOUR_REPO_PATH
cd $YOUR_REPO_NAME
composer install
symfony serve
```

## Recommendations

* Use third party libraries where appropriate. If you want to write your own component when there are perfectly good solutions off-the-shelf, please submit your reasons for doing so.
* Use a code formatter, linter and/or static analysis tool to ensure consistent code style. Symfony's Coding Standards are good.
* Ensure your code is well-structured, and not all in one file.



Forked from - Symfony Demo Application
========================

The "Symfony Demo Application" is a reference application created to show how
to develop applications following the [Symfony Best Practices][1].

You can also learn about these practices in [the official Symfony Book][5].

Requirements
------------

  * PHP 8.1.0 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][2].

Installation
------------

[Download Symfony][4] to install the `symfony` binary on your computer and run
this command:

```bash
$ symfony new --demo my_project
```

Alternatively, you can use Composer:

```bash
$ composer create-project symfony/symfony-demo my_project
```

If you want to test the demo without installing anything locally, you can also
deploy it on Platform.sh, the official Symfony PaaS:

<p align="center">
<a href="https://console.platform.sh/projects/create-project?template=https://raw.githubusercontent.com/symfonycorp/platformsh-symfony-template-metadata/main/template-metadata-demo.yaml&utm_content=symfonycorp&utm_source=github&utm_medium=button&utm_campaign=deploy_on_platform"><img src="https://platform.sh/images/deploy/lg-blue.svg" alt="Deploy on Platform.sh" width="180px" /></a>
</p>

Usage
-----

There's no need to configure anything to run the application. If you have
[installed Symfony][4] binary, run this command:

```bash
$ cd my_project/
$ symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][3] like Nginx or
Apache to run the application.

Tests
-----

Execute this command to run tests:

```bash
$ cd my_project/
$ ./bin/phpunit
```

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/setup.html#technical-requirements
[3]: https://symfony.com/doc/current/setup/web_server_configuration.html
[4]: https://symfony.com/download
[5]: https://symfony.com/book
