## Solution

1. Verify the deployment has 'Rolling Update' as its deployment strategy. (\`type: RollingUpdate\`)

    `kubectl get deployment nginx-deployment -o yaml`

2. Rollout deployment using imperative command

    `kubectl set image deployments/nginx-deployment nginx-container=nginx:1.17`

3. Verify rollout status

    `kubectl rollout status`
    `kubect get pods -o wide`