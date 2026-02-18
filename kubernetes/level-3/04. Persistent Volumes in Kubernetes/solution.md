## Solution

1. Imperative commands are not supported for PV and PVC, so create the files manually from doc.
    `vi pv.yaml`
    `vi pvc.yaml`

2. Create pod's definition file using imperative command
    `kubectl run pod-nautilus --image=httpd:latest --dry-run=client -o yaml > pod.yaml`

3. Expose the pod using a service
    `kubectl expose pod pod-nautilus --type=NodePort --port=80 --dry-run=client -o yaml > svc.yaml`