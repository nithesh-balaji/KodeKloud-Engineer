## Solution

1. Check deployment history

    `kubectl rollout history deployments/nginx-deployment`

2. Use imperative command to rollback to the previous version

    `kubectl rollout undo deployments/nginx-deployment`
