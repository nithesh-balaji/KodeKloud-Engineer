## Solution

1. Create jenkins namespace and switch to it
    `kubectl create ns jenkins && kubectl config set-context --current --namespace=jenkins`

2. Create deployment using imperative command, make necessary changes and create the resource.
    `kubectl create deploy -n jenkins jenkins-deployment --image=jenkins/jenkins --port=8080 --replicas=1 --dry-run=client -o yaml > deploy.yaml`

3. Create service using imperative command, make necessary changes and create the resource.
    `kubectl expose deployment jenkins-deployment --port=8080 --type=NodePort --dry-run=client -o yaml > svc.yaml`
