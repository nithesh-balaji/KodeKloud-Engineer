## Solution

1. Generate pod yaml using Kubectl
    `kubectl run pod-httpd --image=httpd:latest --dry-run=client -o yaml > pod.yaml`

2. Make the necessary label changes by ediing the yaml file
    `vi pod.yaml`

3. Apply the configuration yaml using Kubectl
    `kubectl apply -f pod.yaml`