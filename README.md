# multiple-microservices-in-one-docker-container
Multiple microservices in one docker container

# Microserive
Please Like, Share, and Subscribe if you like the video : [Creator's Channel](https://www.youtube.com/channel/UCBOZRctXJSg9YNLyddedASg?sub_confirmation=1)

- YouTube Playlist: [Microserive](https://www.youtube.com/watch?v=87IO77xU91Q&list=PLeoClvLfcvYqt2DMeomix7D_DGnL0ARsk&index=7)

Nếu bạn thấy thú vị, thì đăng ký kênh ủng hộ tôi (If you find it interesting, then subscribe to my channel to support me)
- YouTube Channel: [Creator's Channel](https://www.youtube.com/channel/UCBOZRctXJSg9YNLyddedASg?sub_confirmation=1)
- TikTok: [@ha.nguyn.coder](https://www.tiktok.com/@ha.nguyn.coder)
- Twitter: [@skipperhoa](https://twitter.com/skipperhoa)
- Facebook Fanpage: [Fanpage](https://www.facebook.com/profile.php?id=100049475056780)
- Website: [hoanguyenit.com](https://hoanguyenit.com)

------------------------------------

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
![Container in Docker](https://raw.githubusercontent.com/skipperhoa/multiple-microservices-in-one-docker-container/main/image-demo/Screenshot%202024-04-26%20at%2013.32.10.png)


# Show list container 

hoacode@HOACODEs-MacBook-Pro microservice-app % docker 
![Show list container](https://raw.githubusercontent.com/skipperhoa/multiple-microservices-in-one-docker-container/main/image-demo/Screenshot%202024-04-26%20at%2014.16.11.png)


# Check name network
hoacode@HOACODEs-MacBook-Pro microservice-app % docker network inspect web                                                              
![Check name network](https://raw.githubusercontent.com/skipperhoa/multiple-microservices-in-one-docker-container/main/image-demo/Screenshot%202024-04-26%20at%2014.16.27.png)


# Ping Container 

hoacode@HOACODEs-MacBook-Pro microservice-app % docker exec -it microservice-app_nginx_service2_1 ping microservice-app_nginx_service3_1
![Ping Container ](https://raw.githubusercontent.com/skipperhoa/multiple-microservices-in-one-docker-container/main/image-demo/Screenshot%202024-04-26%20at%2014.16.30.png)


