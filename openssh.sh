#! /usr/bin/env bash

## ssh-keygen -t ed25519 -C "111202012411@mhs.dinus.ac.id"
## How to Use, source ./openssh.sh

if [ "$(id -u)" -eq 0 ]; then
    echo -en "\x1b[1;31;40mSuperUser Not Requirement\x21\x1b[0m\n" && exit 1
fi

if [ -z "$(which git | grep -iv 'not found')" ]; then
    echo -en "\x1b[1;31;40mProgram git Not Found\x21\x1b[0m\n" && exit 1
fi

if [ -z "$(which ssh-agent | grep -iv 'not found')" ]; then
    echo -en "\x1b[1;31;40mProgram ssh-agent Not Found\x21\x1b[0m\n" && exit 1
fi

if [ -z "$(which ssh-add | grep -iv 'not found')" ]; then
    echo -en "\x1b[1;31;40mProgram ssh-add Not Found\x21\x1b[0m\n" && exit 1
fi

if [ "$(pgrep ssh-agent)" ]; then
    killall -9 ssh-agent
    rm -rf /tmp/ssh-*
fi

git config --local user.name = "111202012411"
git config --local user.email = "111202012411@mhs.dinus.ac.id"

eval `ssh-agent -s | head -n 2`

# echo SSH_AUTH_SOCK=$SSH_AUTH_SOCK
# echo SSH_AGENT_PID=$SSH_AGENT_PID

ssh-add ~/.ssh/student/`ls ~/.ssh/student | grep -E '\.pub$' | head -n 1 | cut -d\. -f1`
