# This is a complete server assembled in a docker

With the help of docker-compose and docker technologies, I have created a full working server that is deployed in three containers, which are connected by a common, dedicated network
With the help of bash scripts was written by the logic of the first run, which allows you to take this building to any user and get a box with a configured server with a database and configured wordpress
SSL certificates were configured for encryption and all work is performed on port 443

## Technologies

1. Docker-compose
2. Docker
3. Make
4. Bash
5. Php

## Launch

1. Build a project using Makefile

   ```sh
   $ make
   ```
  
2. Now the containers are up and you can check out the running website at the link:

   ```sh
   $ https://gkelsie.42.fr
   ```

## Vizualization

  <img src="./screen/docker.jpeg" width="600" alt="docker">
