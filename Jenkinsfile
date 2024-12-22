pipeline {
  agent {
    label 'win-agent'
  }
  stages {
    stage('Verify Tooling') {
      steps {
        echo 'verify tooling stage'
        bat 'docker -v'
        bat 'docker info'
        bat 'docker-compose config'
      }
    }
    stage ('Run Docker Compose') {
      steps{
        bat 'docker-compose up -d'
      }
    }
  }
}
