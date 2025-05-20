## Solution

1. Run imperative command to create namespace

    `kubectl create namespace dev`

2. One liner command to launch a pod in namespace

    `kubectl run dev-nginx-pod --image=nginx:latest --namespace=dev`

