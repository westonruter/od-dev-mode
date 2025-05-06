#!/bin/bash

cd "$(dirname "$0")/.."

plugin_slug="$(basename "$(pwd)")"

if [ -e "$plugin_slug.zip" ]; then
	rm "$plugin_slug.zip"
fi

git archive --format=zip --output="$plugin_slug.zip" HEAD
