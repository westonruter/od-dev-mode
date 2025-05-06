#!/bin/bash

cd "$(dirname "$0")/.."

if [ -e od-dev-mode.zip ]; then
	rm od-dev-mode.zip
fi

zip od-dev-mode.zip od-dev-mode.php
