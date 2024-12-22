pipeline {
  agent {
    label "win-agent"
  }
  stages {
    stage('Checkout') {
            steps {
                checkout scm
            }
    }
    stage ('Run Docker Compose') {
      steps{
        sh 'docker-compose up -d'
      }
    }
  }
}
