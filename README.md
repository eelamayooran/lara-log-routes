# Log Routes Package

A Laravel package for log routes, specifically designed for **development environments**. This package allows you to easily view and clear your Laravel log files via custom routes. It is intended to be used only in **local** or **development** environments, and should not be included in production environments.

## Features

- **View logs**: Access Laravel log file through a simple `/logs` route.
- **Clear logs**: Clear the Laravel log file with a `/clear-logs` route.

## Installation

### Step 1: Add the Package to Your Project

You can install the package in your Laravel project by requiring it as a development dependency:

```bash
composer require yourvendor/log-routes-package --dev
