## Solution

1. Create deployment using imperative command, make necessary changes and create the resource.
    `kubectl create deployment grafana-deployment-datacenter --image=grafana/grafana:latest --dry-run=client -o yaml > deploy.yaml`

2. Create service using imperative command, make necessary changes and create the resource.
    `kubectl expose deployment grafana-deployment-datacenter --type=NodePort --dry-run=client --port=3000 -o yaml > svc.yaml`