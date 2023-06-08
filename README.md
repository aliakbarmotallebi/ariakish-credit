# ariakish-credit



docker-compose up -d # run all services
docker-compose stop nginx # stop only one. but it is still running !!!
docker-compose build --no-cache nginx 
docker-compose up -d --no-deps # link nginx to other services
docker-compose up -d --no-deps --build <service_name>

docker-compose up --force-recreate --no-deps [-d] [<service_name>..]

docker-compose ps # lists all services (id, name)
docker-compose stop <id/name> #this will stop only the selected container
docker-compose rm <id/name> # this will remove the docker container permanently 
docker-compose up # builds/rebuilds all not already built container 

docker-compose kill nginx

docker rm -f nginx


docker-compose up -d
docker ps -a
docker logs 49419cb9980a

docker exec -it 49419cb9980a bash
echo $MYSQL_ROOT_PASSWORD

docker-compose down -v
docker-compose up -d