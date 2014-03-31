#!/usr/bin/env bash
PROJECT_DIR=$(cd $(dirname ${BASH_SOURCE[0]});cd ..;pwd)
vendor/bin/doctrine-module odm:generate:documents module/Forum/src/ --generate-annotations=true --update-documents=true
