# Drupal Starter
This provides an easy way to install a vanilla Drupal 8/9 site along with development tools for testing and linting, including deprecation checking & fixings for Drupal 9 compatibility.

## Quickstart
Assuming you already have Docksal set up:

* Choose which Drupal core version you want to install: `git checkout 8.x` or `git checkout 9.x`
* `composer install`
* `fin init && fin init-site && fin uli`

## Deprecation checking
Run the following command to run Drupal 9 compatibility checks with [drupal-check](https://github.com/mglaman/drupal-check):

```
vendor/bin/drupal-check path/to/directory
```

## Deprecation fixes via Drupal Rector

Run the following commands to attempt to automate Drupal 9 compatibility fixes with [drupal-rector](https://github.com/palantirnet/drupal-rector)

1. Analyze the code

```
vendor/bin/rector process web/modules/contrib/[YOUR_MODULE] --dry-run
```

2. Apply suggested changes

```
vendor/bin/rector process web/modules/contrib/[YOUR_MODULE]
```
