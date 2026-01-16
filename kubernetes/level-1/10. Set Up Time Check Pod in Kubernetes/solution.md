## Solution

1. Create namespace
    `kubectl create ns datacenter`

2. Imperative command to create ConfigMap
    `kubectl create configmap time-config --from-literal=TIME_FREQ=12 -n datacenter`

3. Imperative command to create pod
    `kubectl run time-check --image=busybox:latest --dry-run=client -o yaml > pod.yaml`
    
4. Edit pod to make necessary changes and create pod
    `vi pod.yaml`
    `kubectl create -f pod.yaml -n datacenter`