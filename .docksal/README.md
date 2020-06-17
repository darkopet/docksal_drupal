# Docksal Local development

## Install Docksal
https://docs.docksal.io/getting-started/setup/

## Initialize site from freshly cloned
* `fin init`

## Do a site-install w/o rebuilding containers & composer update:
* `fin init-site`

## XDebug
This should provide "out of the box" xdebugging ability
Test steps:
* Download [VSCode debug extension](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug)
* Checkout this branch, `fin init-site`, go to "debug" tab and start debugging:
![image](https://media.github.austin.utexas.edu/user/68/files/3fc12580-6cd4-11e9-9ecc-98090c974553)
* When you refresh the site in a spot where that code executes, it should jump you into vscode
![image](https://media.github.austin.utexas.edu/user/68/files/7e56e000-6cd4-11e9-90f0-58c9ac48b006)
