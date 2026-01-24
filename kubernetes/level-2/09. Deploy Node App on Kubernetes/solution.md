## Solution

1. Create deployment using imperative command, make necessary changes and create the resource.
    `kubectl create deploy node-app --image=gcr.io/kodekloud/centos-ssh-enabled:node --replicas=2 --dry-run=client -o yaml > deploy.yaml`

2. Create service using imperative command, make necessary changes and create the resource.
    `kubectl expose deployment node-app --port=8080 --type=NodePort --dry-run=client -o yaml > svc.yaml`