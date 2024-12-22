pipeline {
  agent {
    label 'win-agent'
  }
  stages {
    stage('Verify Tooling') {
      steps {
        echo 'verify tooling stage'
        cmd /c 'docker -v'
      }
    }
    stage ('Run Docker Compose') {
      steps{
        sh 'sudo docker-compose up -d'
      }
    }
  }
}
