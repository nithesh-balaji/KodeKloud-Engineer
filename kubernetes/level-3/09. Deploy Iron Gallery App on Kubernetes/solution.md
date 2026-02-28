## Solution

1. Create namespace using imperative command
    `kubectl create ns iron-namespace-devops`

2. Switch to the created namespace for ease of work
    `kubectl config set-context --current --namespace=iron-namespace-devops`

3. Create deployment using imperative command and make necessary changes
    `kubectl create deployment iron-gallery-deployment-devops --image=kodekloud/irongallery:2.0 --replicas=1 --dry-run=client -o yaml > deploy.yaml`

4. Create deployment using imperative command and make necessary changes
    `kubectl create deployment iron-db-deployment-devops  --image=kodekloud/irondb:2.0  --replicas=1 --dry-run=client -o yaml > db-deploy.yaml`

5. Expose the deployment using a service, but drr-run and make changes in prior before creation
    `kubectl expose deployment iron-db-deployment-devops --name=iron-db-service-devops --port=3306 --dry-run=client -o yaml > db-svc.yaml`

6. Expose the deployment using a service, but drr-run and make changes in prior before creation
    `kubectl expose deployment iron-gallery-deployment-devops --name=iron-gallery-service-devops --port=80 --type=NodePort --dry-run=client -o yaml > svc.yaml`