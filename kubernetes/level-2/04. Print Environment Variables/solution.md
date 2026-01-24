## Solution

1. Create pod yaml using imperative command
    `kubectl run print-envars-greeting --image=bash --dry-run=client -o yaml > pod.yaml`

2. Make necessary changes & create the pod
    `kubectl create -f pod.yaml`

3. Check logs to verify 
    `kubectl logs -f print-envars-greeting`