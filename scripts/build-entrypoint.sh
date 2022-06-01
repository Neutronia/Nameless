#!/bin/bash
set -e

if [ -f 'core/config.php' ]
then
    echo "It appears NamelessMC is installed, please run this build script in a freshly cloned repository only."
    # exit 1
fi

function archive {
    echo "Creating $1 zip"
    zip -rq "/dist/nameless-$1.zip" . -x 'scripts/*' -x yarn-postinstall.js -x yarn.lock -x package.json -x composer.json
    echo "Creating $1 tar"
    tar -c -J -f --exclude 'scripts' --exclude yarn-postinstall.js --exclude yarn.lock --exclude package.json --exclude composer.json "/dist/nameless-$1.tar.xz" .
}

archive base

echo "Running yarn"
yarnpkg
echo "Deleting node modules"
rm -r node_modules

echo "Running composer"
composer install --no-dev
archive deps-dist

echo "Running composer with development dependencies"
composer install
archive deps-dev
