## Solution

1. Copy pod config yaml in to a file 
    `kubectl get pod webeserver -o yaml > pod.yaml`

2. Notice the ImagePullBackOff error, check image and fix the error
    `nginx:latests > nginx:latest`