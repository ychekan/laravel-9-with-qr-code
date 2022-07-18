## Run project
Copy project in you computer and run the build docker containers. If you need then you can change setting or add/remove package for containers.

`docker-compose build`

After successfully build run the docker

`docker-compose up -d`

After finish the work with project if you need then shutdown the docker containers

`docker-compose down`

For to install package in the project you need to going inside the **web** container. Use this command.

`docker exec -it web bash`

For create database in container use this command

`docker exec -it db mysql -u root -p`

Then create database like

`CREATE DATABASE qr_code;`

## Create Laravel Project

Run bash for go to in inside to container web and run install composer dependencies

`docker exec -it web bash`

Then run command

`composer install`

After successfully install, setting db connect in `.env` file

`DB_CONNECTION=mysql`\
`DB_HOST=db`\
`DB_PORT=3306`\
`DB_DATABASE=qr_code`\
`DB_USERNAME=root`\
`DB_PASSWORD=root`

Restart you container and go to url in `http://localhost:8080/qr-code`. You see all examples
