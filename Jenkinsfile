pipeline {
  agent {
    label 'win-agent'
  }
  stages {
    stage ('Run Docker Compose') {
      steps {
        sh """
          docker compose up -d
        """
    }
  }
}
