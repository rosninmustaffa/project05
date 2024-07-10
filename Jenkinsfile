pipeline {
  agent {
    label "dck-agt-jenkins"
  }
  stages {
    stage ('Run Docker Compose') {
      steps{
        sh 'sudo docker-compose up -d'
      }
    }
  }
}
