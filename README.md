# Minicli Help Command

Default help command. This will auto-generate a command/sub-command tree based on all commands registered within the CommandRegistry, and print it to users that call './minicli help'.

## Usage

First, import this command with Composer:

```shell
composer require minicli/command-help
```

Then, edit your app's config to include `@minicli/command-help` within your `app_path` definitions. For instance:

```php
$app = new App([
    'app_path' => [
            __DIR__ . '/app/Command',
            '@minicli/command-help'
        ],
    'debug' => true
]);
```

You should now be able to run the `./minicli help` command and obtain output that will vary depending on your own implemented commands. Here is an example:

```
Available Commands

help
└──table
└──test

```