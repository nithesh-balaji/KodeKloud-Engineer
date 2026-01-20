## Solution

1. Create the pod.yaml using the kubectl impeartive command
    `kubectl run volume-share-devops --image=debian:latest --dry-run=client -o yaml > pod.yaml`

2. Add necessary changes and create the pod
    `kubectl create -f pod.yaml`

3. Exec into the first container and create the file
    `kubectl exec -it volume-share-devops -c volume-container-devops-1 -- bash`
    `touch /tmp/media/media.txt`

4. Exec into the second container to check the file's existence in shared volume
    `kubectl exec -it volume-share-devops -c volume-container-devops-2 -- bash`