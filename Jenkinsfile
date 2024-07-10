pipeline {
  agent {
    label "dck-agt-jenkins"
  }
  stages {
    stage ('Run Docker Compose') {
      steps{
        sh 'docker-compose up -d'
      }
    }
  }
}
