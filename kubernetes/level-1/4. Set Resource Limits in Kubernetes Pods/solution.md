## Solution

1. Generate pod yaml using Kubectl

    `kubectl run httpd-pod --image=httpd:latest --dry-run=client -o yaml > pod.yaml`

2. Add resource requests and limits by ediing the yaml file

    `vi pod.yaml`

3. Apply the configuration yaml using Kubectl

    `kubectl apply -f pod.yaml`