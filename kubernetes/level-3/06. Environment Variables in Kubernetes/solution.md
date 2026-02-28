## Solution

1. Create pod using imperative command and edit necessary changes
    `kubectl run envars --image=nginx:latest --dry-run=client -o yaml > pod.yaml`