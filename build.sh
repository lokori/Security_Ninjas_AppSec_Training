#!/bin/bash

# Build app image
cd app
docker build . -t disobey:latest

# Build nginx image
cd nginx
docker build . -t disobey-proxy:latest
