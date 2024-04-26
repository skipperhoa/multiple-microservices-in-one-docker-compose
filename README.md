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

# Show list container 

hoacode@HOACODEs-MacBook-Pro microservice-app % docker ps                                                                               
CONTAINER ID   IMAGE                             COMMAND                  CREATED          STATUS          PORTS                                         NAMES
fd491f37e0c5   microservice-app_service2         "docker-php-entrypoi…"   5 minutes ago    Up 5 minutes    9000/tcp                                      microservice-app_service2_1
a03851c8b202   microservice-app_service3         "docker-php-entrypoi…"   5 minutes ago    Up 5 minutes    9000/tcp                                      microservice-app_service3_1
ee911b0d654b   microservice-app_service1         "docker-php-entrypoi…"   30 minutes ago   Up 13 minutes   9000/tcp                                      microservice-app_service1_1
3f4fb7ce20b5   mysql:8.0                         "docker-entrypoint.s…"   41 minutes ago   Up 13 minutes   33060/tcp, 0.0.0.0:3307->3306/tcp             mysql_service2
9a012a2470fa   microservice-app_mysql_service3   "docker-entrypoint.s…"   41 minutes ago   Up 13 minutes   3308/tcp, 33060/tcp, 0.0.0.0:3308->3306/tcp   mysql_service3
497cbe3278dd   microservice-app_nginx_service2   "/docker-entrypoint.…"   41 minutes ago   Up 13 minutes   0.0.0.0:8001->80/tcp                          microservice-app_nginx_service2_1
0cb79a88db57   microservice-app_nginx_service3   "/docker-entrypoint.…"   41 minutes ago   Up 13 minutes   0.0.0.0:8003->80/tcp                          microservice-app_nginx_service3_1
854f3ca9c9a3   microservice-app_nginx_service1   "/docker-entrypoint.…"   41 minutes ago   Up 13 minutes   0.0.0.0:8000->80/tcp                          microservice-app_nginx_service1_1
e2fb6b1e09ff   mysql:8.0                         "docker-entrypoint.s…"   41 minutes ago   Up 13 minutes   0.0.0.0:3306->3306/tcp, 33060/tcp             mysql_service1


# Check name network
hoacode@HOACODEs-MacBook-Pro microservice-app % docker network inspect web                                                              
[
    {
        "Name": "web",
        "Id": "dcac507dacd1b6f5ebd11a05ec24314103c03f077ee59287e9e7f0c909cab3d8",
        "Created": "2024-04-23T03:15:14.02600147Z",
        "Scope": "local",
        "Driver": "bridge",
        "EnableIPv6": false,
        "IPAM": {
            "Driver": "default",
            "Options": {},
            "Config": [
                {
                    "Subnet": "192.168.112.0/20",
                    "Gateway": "192.168.112.1"
                }
            ]
        },
        "Internal": false,
        "Attachable": false,
        "Ingress": false,
        "ConfigFrom": {
            "Network": ""
        },
        "ConfigOnly": false,
        "Containers": {
            "0cb79a88db574c0ac215a1b786662d84c1a9cac77f8823d8e66a708cc6f3a7cf": {
                "Name": "microservice-app_nginx_service3_1",
                "EndpointID": "4580d7f85b30e2e569918b308d725f4bbeacf44d2593229ddaee9854b1c71f0c",
                "MacAddress": "02:42:c0:a8:70:07",
                "IPv4Address": "192.168.112.7/20",
                "IPv6Address": ""
            },
            "497cbe3278ddb53a1983cf33073e2aafa03c2fa1a9c2b73b46f811d3044ca380": {
                "Name": "microservice-app_nginx_service2_1",
                "EndpointID": "3d6eba348e97f204f218280c4f859f889da6edd6a145ebec4ced222c07246537",
                "MacAddress": "02:42:c0:a8:70:05",
                "IPv4Address": "192.168.112.5/20",
                "IPv6Address": ""
            },
            "854f3ca9c9a360f88e56830527f126549c0a006cb5cd7e385e39d05a3a79a4a3": {
                "Name": "microservice-app_nginx_service1_1",
                "EndpointID": "1c9fd5b51dd9e2d3ba0937d11384f18301b0f5e64ca03182d3866fadc6f332cb",
                "MacAddress": "02:42:c0:a8:70:03",
                "IPv4Address": "192.168.112.3/20",
                "IPv6Address": ""
            },
            "a03851c8b202ed905ff79d3fc874b044aaa378a755623e1f25137b88da805a51": {
                "Name": "microservice-app_service3_1",
                "EndpointID": "2baa198e15bf0ea90294c1c38497504b7704cf094d42c8675d6f6e01d93be8f3",
                "MacAddress": "02:42:c0:a8:70:04",
                "IPv4Address": "192.168.112.4/20",
                "IPv6Address": ""
            },
            "ee911b0d654b559904e6762503f0074fe38cfc25030d0deb885ad213ad4446a3": {
                "Name": "microservice-app_service1_1",
                "EndpointID": "8d183f34c890592039d8f48efb89595b5bf2533b28a69f0cba4d03e0d583c1b2",
                "MacAddress": "02:42:c0:a8:70:02",
                "IPv4Address": "192.168.112.2/20",
                "IPv6Address": ""
            },
            "fd491f37e0c5d9d6467773d6e8d6b9d800aeef513209e2f10960eb9a61d0ea3a": {
                "Name": "microservice-app_service2_1",
                "EndpointID": "203b2c09a719cc8a8aeb8895d344562599061bde4154108b66c54ade46b551e3",
                "MacAddress": "02:42:c0:a8:70:06",
                "IPv4Address": "192.168.112.6/20",
                "IPv6Address": ""
            }
        },
        "Options": {},
        "Labels": {}
    }
]

# Ping Container 

hoacode@HOACODEs-MacBook-Pro microservice-app % docker exec -it microservice-app_nginx_service2_1 ping microservice-app_nginx_service3_1
PING microservice-app_nginx_service3_1 (192.168.112.7): 56 data bytes
64 bytes from 192.168.112.7: seq=0 ttl=64 time=0.517 ms
64 bytes from 192.168.112.7: seq=1 ttl=64 time=0.359 ms
64 bytes from 192.168.112.7: seq=2 ttl=64 time=0.577 ms
64 bytes from 192.168.112.7: seq=3 ttl=64 time=1.062 ms
64 bytes from 192.168.112.7: seq=4 ttl=64 time=0.402 ms
64 bytes from 192.168.112.7: seq=5 ttl=64 time=0.369 ms
64 bytes from 192.168.112.7: seq=6 ttl=64 time=0.142 ms
64 bytes from 192.168.112.7: seq=7 ttl=64 time=0.292 ms
ç64 bytes from 192.168.112.7: seq=8 ttl=64 time=0.519 ms
--- microservice-app_nginx_service3_1 ping statistics ---
9 packets transmitted, 9 packets received, 0% packet loss
round-trip min/avg/max = 0.142/0.471/1.062 ms
hoacode@HOACODEs-MacBook-Pro microservice-app % docker exec -it microservice-app_nginx_service1_1 ping microservice-app_nginx_service2_1
PING microservice-app_nginx_service2_1 (192.168.112.5): 56 data bytes
64 bytes from 192.168.112.5: seq=0 ttl=64 time=0.144 ms
64 bytes from 192.168.112.5: seq=1 ttl=64 time=0.480 ms
64 bytes from 192.168.112.5: seq=2 ttl=64 time=0.471 ms
64 bytes from 192.168.112.5: seq=3 ttl=64 time=0.464 ms
64 bytes from 192.168.112.5: seq=4 ttl=64 time=0.507 ms
64 bytes from 192.168.112.5: seq=5 ttl=64 time=0.451 ms
64 bytes from 192.168.112.5: seq=6 ttl=64 time=0.382 ms
^C
--- microservice-app_nginx_service2_1 ping statistics ---
7 packets transmitted, 7 packets received, 0% packet loss
round-trip min/avg/max = 0.144/0.414/0.507 ms
hoacode@HOACODEs-MacBook-Pro microservice-app % 
