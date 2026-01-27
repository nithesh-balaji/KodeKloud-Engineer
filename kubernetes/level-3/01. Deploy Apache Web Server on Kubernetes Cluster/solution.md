## Solution

1. Create namespace and switch context
    `kubectl create ns httpd-namespace-nautilus  && kubectl config set-context --current --namespace=httpd-namespace-nautilus`

2. Create deployment with imperative command
    `kubectl create deployment httpd-deployment-nautilus -n httpd-namespace-nautilus --image=httpd:latest --replicas=2 --dry-run=client -o yaml > deploy.yaml`

3. Expose the deployment with NodePort service
    `kubectl expose deployment httpd-deployment-nautilus --name=httpd-service-nautilus --port=80 --type=NodePort --dry-run=client -o yaml > svc.yaml`