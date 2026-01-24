## Solution

1. Create a new namespace and switch context
    `kubectl create ns devops && kubectl config set-context --current --namespace=devops`

2. Create the deployment using imperative command & make necessary changes
    `kubectl create deploy httpd-deploy -n devops --image=httpd:2.4.27 --replicas=4 --dry-run=client -o yaml > deploy.yaml`

3. Create the service using imperative command & make necessary changes
    `kubectl expose deployment -n devops httpd-deploy --port=80 --type=NodePort --dry-run=client -o yaml > svc.yaml`

4. Imperative command to change the image of the deployment container
    `kubectl set image deployment/httpd-deploy httpd=httpd:2.4.43`

5. Imperative command to rollback the deployment to original version
    `kubectl rollout undo deployment httpd-deploy`