## More info: 
* https://github.com/iperfex-team/iperfex-gui-framework 
* https://hub.docker.com/r/iperfex/iperfex-gui-framework

## Modules

| Module  | Description  | Message |
| :------------ |:---------------:| :-----: | 
| applet_admin  | dashboard manager module | ok | 
| currency      | module to change currency | ok |
| dashboard | dashboard module | ok |
| _iperfexutils | module with libraries | ok | 
| grouplist | module manages groups in the system | ok | 
| group_permission | permission handler module | ok | 
| language | module to change language | ok | 
| network_parameters | network manager module | ok | 
| organization | module manages organizations in the system | ok | 
| organization_permission | permission handler module | ok | 
| packages | module shows the installed packages. | ok | 
| repositories | list module installed repositories | ok | 
| shutdown | module for shutdown | ok | 
| smtp | module for smtp | ok | |
| themes_system | Module Manager themplates | ok | 
| time_config | Module to change the time of S.O | ok |
| userlist | module manage users | ok | 


## WEB Credentials

Host: https://localhost:4443

User: admin

Pass: PassWord.2o17

## Compose docker-compose.yml
```bash
version: '3.6'
services:
  panel:
    container_name: iperfex-gui-framework
    image: iperfex/iperfex-gui-framework:latest
    ports:
      - 0.0.0.0:4443:443
    volumes:
      - ./build/iperfex-gui-framework/var/www:/var/www
      - ./build/iperfex-gui-framework/usr/share/iperfex:/usr/share/iperfex
    environment:
      MYSQL_ROOT_PASSWORD: ${MYSQL_ROOT_PW}
      PANEL_DB_HOST: db
      PANEL_DB_NAME: iperfexpbx
      PANEL_DB_USER: asteriskuser
      PANEL_DB_PASSWORD: ${PANELGUI_PW}
    depends_on:
      - db
    networks:
      - iperfex-network
  db:
    image: mariadb:latest
    ports:
      - 3307:3306
    volumes:
      - ./docker-entrypoint.sh:/usr/local/bin/docker-entrypoint.sh
      - ./iperfex-gui-framework.sql:/docker-entrypoint-initdb.d/1-init.sql
    environment:
      MYSQL_ROOT_PASSWORD: ${MYSQL_ROOT_PW}
      MYSQL_DATABASES: "iperfexpbx isurveyx"
      MYSQL_USER: asteriskuser
      MYSQL_PASSWORD: ${PANELGUI_PW}
    networks:
      - iperfex-network
networks:
  iperfex-network:
        driver: bridge
```

## Run
```bash
cd /usr/src
git clone https://github.com/iperfex-team/iperfex-gui-framework.git
cd iperfex-gui-framework
chmod 777 docker-entrypoint.sh
docker-compose up -d
docker-compose exec panel /usr/bin/chown apache:apache -R /var/www/html/*
docker-compose exec panel /usr/bin/chown apache:apache -R /usr/share/iperfex/
````
