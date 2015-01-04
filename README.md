# Sample PHP/NodeJS application

## PHP

The `slim` microframework is used to handle the PHP part

## NodeJS

NodeJS is installed to install/build assets, the different tasks
are specified in the `composer.json` file of the PHP project

```json
{
  …
  "extra": {
    "paas": {
      "compile": [
        "node_modules/.bin/bower install",
        "node_modules/.bin/gulp bundle"
      ]
    }
  }
}
```

## Deployment

* Install http://cli.scalingo.com

```
scalingo create appname
scalingo -a appname env-set BUILDPACK_NAME=php
git push scalingo master
```

> Usually the buildpack is chosen automatically, but as this application is using two distinct technologies, it has to be specified.

That's it your app is live.

http://sample-php-nodejs.scalingo.io