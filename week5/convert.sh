#! /usr/bin/env bash
prime-run ffmpeg -i video.mp4 -c:v libvpx-vp9 -crf 30 -b:v 0 -b:a 128k -c:a libopus video.webm
