## Solution

1. Create namespace and switch to it
    `kubectl create ns tomcat-namespace-nautilus && kubectl config set-context --current --namespace=tomcat-namespace-nautilus`

2. Create deployment using imperative command, make necessary changes and create the resource.
    `kubectl create deploy tomcat-deployment-nautilus --replicas=1 --image=gcr.io/kodekloud/centos-ssh-enabled:tomcat --port=8080 --dry-run=client -o yaml > deploy.yaml`

3. Create service using imperative command, make necessary changes and create the resource.
    `kubectl expose deployment tomcat-deployment-nautilus --type=NodePort --dry-run=client -o yaml > svc.yaml`