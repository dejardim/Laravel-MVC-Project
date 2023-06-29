# Laravel MVC Project

This project is a technical test that demonstrates a basic Laravel application using the MVC (Model-View-Controller) architecture.

## Table of Contents

-   [Overview](#overview)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Video Documentation](#video-documentation)
-   [Screenshots](#screenshots)
-   [License](#license)

## Overview

In this task, you are required to develop a program using the Laravel framework to consume the API "https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0" and display user data in a paginated table.

The program should perform the following steps:

1. Consume the provided API endpoint to retrieve user data.
2. Implement pagination logic to display a limited number of users per page.
3. Display the user data in a paginated table, showing the user ID, name, age and email.
4. Provide navigation links to allow users to navigate between pages.
5. Use a CSS framework (tailwindcss) to enhance the appearance of the table and pagination controls.

## Installation

1. Clone the repository or download the source code.
2. Ensure that you have Composer installed.
3. Run `composer install` to install the project dependencies.
4. Create a copy of the `.env.example` file and rename it to `.env`.
5. Generate an application key by running `php artisan key:generate`.
6. Update the `.env` file with your database credentials.
7. Run `php artisan migrate` to run the database migrations.
8. Optionally, run `php artisan db:seed` to seed the database with sample data.

## Usage

Explain how to run and use the project. Provide any necessary instructions or steps to follow.

1. Start the Laravel development server: `php artisan serve`.
2. Access the application in your web browser by visiting `http://localhost:80` (or the specified URL).

## Screenshots

![Screenshot](https://imgur.com/j46zpPS.png)
_Homepage_

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
