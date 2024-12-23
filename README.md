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

This project is a sample CI/CD project using Github as Version Control reposoitory, Jenkins as CI/CD tool and docker for deployment.
**Pre-requisite**
1. Java 11, Java 17, or Java 21 (for Jenkins installation).
2. Jenkins (This project has only been tested for non-docker installation). I am using ver 2.479.2 on Windows 11. 
3. SSH key pair.
4. Docker desktop.

**Steps:** 
For this example I am using Windows 11 for my operating system.
1. Create a directory for Jenkins agent. **Example**: _c:\jenkins-agent_.
2. Create Jenkins agent.
   a. Navigate to *Dashboard*->*Manage Jenkins*->*Nodes*.
   b. Click *New Node* button.
   c. Fill in *Node Name* (**Example**: _win-agent_), select *Permanent Agent* type and click *Create*.
4. On agent description page:
   a. Set *Remote root directory* to be the directory created in step 1.
   b. For *Launch Method*, select *Launch agent by connecting it to the controller*.
   c. Click *Save* button.
6. Node will be created but not available. Click the name of the newly created node.
7. Select the code for your local machine operating system.
8. On **File Explorer**, right click and select _Open in Terminal_.
   a. Execute the first command (**Note**: Ensure the localhost port is correct if Jenkins was installed using a different port).
      curl.exe -sO http://localhost:8080/jnlpJars/agent.jar
   b. Ececute the second command.
      java -jar agent.jar -url http://localhost:8080/ -secret 47b1dfa151fad2b11607097ff3b7a8c168776cccf888e2f6af410358a6664893 -name "win-agent" -webSocket -workDir "C:\jenkins-agent"
10. On Jenkins, navigate to *Dashboard*->*Manage Jenkins*->*Nodes*.
    Your node should now be online.
12. Navigate to *Dashboard* and click on *New Item*.
13. Enter a name (**Example**: project05-pipeline), select _Pipeline_ and click _OK_ button.
14. In General page:
    a. Under _Pipeline_, select _Pipeline script from SCM_.
    b. Under _SCM_, select _Git_.
    c. Under _Repository URL_, paste the address to clone this project (**Example**: https://github.com/rosninmustaffa/project05.git).
       This is a public repo, so no credential is required.
    d. Under _Branch Specifier (blank for 'any')_, type "main".
    e. Ensure _Script Path_ is set to _Jenkinsfile_.
16. Click _Save_.
17. Click _Build Now_ to test your pipeline (**Note**: Ensure _Docker Desktop_ is running).
    
> [!TIP]
**Usage without Jenkins pipeline**:
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
