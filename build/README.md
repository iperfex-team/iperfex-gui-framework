# Info
Based on official [centos] (https://hub.docker.com/_/centos/) and https://hub.docker.com/r/iperfex/centos7-apache-php/

# Apache 2.4.6
- crypto-utils                                                 
- httpd                                                        
- httpd-manual                                      
- mod_fcgid                                          
- mod_ssl

# PHP 5.4.16
- php                                                       
- php-cli                                              
- php-common                                      
- php-devel                                                 
- php-gd                                                  
- php-imap
- php-mcrypt
- php-mbstring                                            
- php-mysql                                            
- php-pdo                                          
- php-pear                                              
- php-pear-DB
- php-process
- php-soap
- php-xml

# IonCube Loader
- php-ioncubeloader

# Supervisor
- supervisor

# Docker CMD

## Build 
```bash
docker build -t iperfex/iperfex-gui-framework:latest -f Dockerfile .
```
## Run
```bash
docker run --name serverweb1 -itd -p 0.0.0.0:4443:443 iperfex/iperfex-gui-framework:latest
```
## Consule
```bash
bash -c "clear && docker exec -it serverweb1 bash"
```
## Tag
```bash
docker tag xxxxxx iperfex/iperfex-gui-framework:latest
```
## Push
```bash
docker login
docker push iperfex/iperfex-gui-framework:latest
```
