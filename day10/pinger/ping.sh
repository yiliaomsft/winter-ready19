#!/bin/sh

apk -U add curl

while :
do
    sleep 2;
    curl http://web:80/ -s
done
