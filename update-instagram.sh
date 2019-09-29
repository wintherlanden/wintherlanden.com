#!/bin/bash

curl https://www.instagram.com/fineart_wintherlanden/ | grep "_sharedData =" > /tmp/.instagram-update
grep _sharedData /tmp/.instagram-update && mv /tmp/.instagram-update instagram.inc.php

