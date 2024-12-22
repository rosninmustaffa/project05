pipeline {
  agent {
    label 'win-agent'
  }
  stages {
    stage ('Run Docker Compose') {
      steps{
        'docker-compose up -d'
      }
    }
  }
}
