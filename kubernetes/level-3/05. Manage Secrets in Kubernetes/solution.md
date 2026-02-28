## Solution

1. Create the secret using imperative command
    `kubectl create secret generic official --from-file=/opt/official.txt`

2. Imperative command for pod creation - Edit the file with necessary changes and create pod.
    `kubectl run secret-devops --image=ubuntu:latest --dry-run=client -o yaml > pod.yaml`