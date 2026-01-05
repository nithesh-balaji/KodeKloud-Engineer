## Solution

1. Imperative command to generate cronjob yaml

    `kubectl create job countdown-nautilus --image=fedora:latest --dry-run=client -o yaml > job.yaml`

2. Make necessary changes in yaml file

    `vi job.yaml`

3. Run create command

    `kubectl create -f job.yaml`