# project05
Simple docker compose project written in PHP <br/> 

**project05/**<br/>
├── *backend/*<br/>
│   ├── Dockerfile<br/>
│   ├── login.php<br/>
├── *frontend/*<br/>
│   ├── Dockerfile<br/>
│   ├── index.php<br/>
│   ├── success.php<br/>
│   ├── failure.php<br/>
│   └── styles.css<br/>
├── *db/*<br/>
│   ├── Dockerfile<br/>
│   └── init.sql<br/>
├── *phpmyadmin/*<br/>
│   └── Dockerfile<br/>
├── docker-compose.yml<br/>

> [!TIP]
**Usage**:
```
$ git clone https://github.com/rosninmustaffa/project05.git 
$ cd project06
$ docker-compose up -d
```
To have Grafana runnning:
```
$ git clone https://github.com/stefanprodan/dockprom 
$ cd dockprom
$ docker-compose up -d
```

**Containers:** <br/>
Login page `http://<host-ip>` <br/>
phpMyAdmin (database management) `http://<host-ip>:8082` <br/>
