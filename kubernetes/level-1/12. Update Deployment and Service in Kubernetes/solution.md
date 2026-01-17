## Solution

1. Directl edit service to change the nodeport
    `kubectl edit svc nginx-service`

2. Imperative command to scale replica count of a deployment
    `kubectl scale deployment nginx-deployment --replicas=5`

3. Imperative command to change the image of a deployment
    `kubectl set image deployment nginx-deployment nginx-container=nginx:latest`