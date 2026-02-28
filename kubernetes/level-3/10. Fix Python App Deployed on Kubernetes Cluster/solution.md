## Solution

1. Seeing an ErrImagePull for python-deployment-devops deployment, image is being incorrectly pulled as poroko/flask-app-demo instead of poroko/flask-demo-app - Fixed it.

2. Port is configured to listen at 8080, while the python app is actually serving at 5000 - Modified the service config to expose 5000 now.