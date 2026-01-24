## Solution

1. Inspect the pods by describing it
    `kubectl describe pod <pod-name>`

2. In events section, notice the errors in Pod Events
    - MountVolume.SetUp failed for volume "config" : configmap "redis-conig" not found
    - Failed to pull image "redis:alpin": rpc error: code = NotFound desc = failed to pull and unpack image "docker.io/library/redis:alpin": failed to resolve reference "docker.io/library/redis:alpin": docker.io/library/redis:alpin: not found

3. Fix both issues by editing the deployment
    - Correct config: redis-config
    - Image: redis:alpine