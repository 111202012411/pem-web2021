#! /usr/bin/env bash

if [ -z "$(which php | grep -iv 'not found')" ]; then
    echo -en "\x1b[1;31;40mProgram php Not Found\x21\x1b[0m\n" && exit 1
fi

if [ ! -d www ]; then
    mkdir -p www
fi

php -S 127.0.0.1:4747 -t www/
