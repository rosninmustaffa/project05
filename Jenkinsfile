pipeline {
  agent {
    label "win-agent"
  }
  tools {
    git 'Default Git'
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
