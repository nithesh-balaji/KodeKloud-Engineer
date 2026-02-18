## Solution

1. Use imperative command to generate the basic yaml structure
    `kubectl create deploy ic-deploy-devops --replicas=1  --image=fedora:latest --dry-run=client -o yaml > deploy.yaml`

2. Edit the necessary changes and create the deployment
    `kubectl create -f deploy.yaml`
