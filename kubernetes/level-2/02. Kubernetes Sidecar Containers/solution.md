## Solution

1. Create the pod.yaml using the kubectl impeartive command
    `kubectl run webserver --image=nginx:latest --dry-run=client -o yaml > pod.yaml`

2. Add necessary changes and create the pod
    `kubectl create -f pod.yaml`