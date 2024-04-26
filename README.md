# multiple-microservices-in-one-docker-container
Multiple microservices in one docker container

+ Service 1 : http://127.0.0.1:8000 
  (php 7, mysql, nginx)
+ Service 2 : http://127.0.0.1:8001
  (php 5.6, nginx)
+ Service 3 : http://127.0.0.1:8003
  - Laravel 11
  - (php 8.2, mysql, nginx)
 

#Run

docker-compose up --build 

or

docker-compose up -d 

# Container in Docker


# Show list container 

hoacode@HOACODEs-MacBook-Pro microservice-app % docker 



# Check name network
hoacode@HOACODEs-MacBook-Pro microservice-app % docker network inspect web                                                              


# Ping Container 

hoacode@HOACODEs-MacBook-Pro microservice-app % docker exec -it microservice-app_nginx_service2_1 ping microservice-app_nginx_service3_1