#!/bin/bash
set -e

mkdir -p dist

rm -rf dist/*.zip

docker build -t nameless-build -f Dockerfile.build --build-arg DATA_CHOWN=$(id -u) .

docker run --rm -v "$(pwd)/dist:/dist" nameless-build
