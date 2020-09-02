#!/bin/bash
docker run -v $(pwd):$(pwd) -w=$(pwd) --rm fscorredores_fscorredores_php php "$@"