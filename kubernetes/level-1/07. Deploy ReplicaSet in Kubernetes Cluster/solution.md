## Solution

1. Imperative command to generate replicaset yaml

    `kubectl create deployment nginx-replicaset --image=nginx:latest --replicas=4 --dry-run=client -o yaml > rs.yaml`


*Note: kubectl create doesn't support creating a replicaset on the fly, so it's better to use create deployment and modify the values.*


2. Edit the yaml file to make necessary changes

    `vi rs.yaml`

3. Finally, create the replicaset using create command

    `kubectl create -f rs.yaml`
