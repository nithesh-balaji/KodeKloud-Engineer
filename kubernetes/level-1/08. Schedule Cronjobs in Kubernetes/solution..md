## Solution

1. Imperative command to generate cronjob yaml

    `kubectl create cronjob devops --image=httpd:latest --schedule='*/7 * * * *' --dry-run=client -o yaml -- echo Welcome to xfusioncorp! > cronjob.yaml`

2. Make necessary changes in yaml file

    `vi cronjob.yaml`

3. Run create command

    `kubectl create -f cronjob.yaml`
