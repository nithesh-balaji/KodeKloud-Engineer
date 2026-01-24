## Solution

1. Create deployment using imperative command and make necessary adjustments
    `kubectl create deployment nginx-deployment --image=nginx:latest --replicas=3 --dry-run=client -o yaml > deploy.yaml`

2. Expose the deployment using a service(Imperative command)
    `kubectl expose deployment nginx-deployment --port=80 --type=NodePort --dry-run=client -o yaml > svc.yaml`

3. Edit the service file to add the NodePort 30011