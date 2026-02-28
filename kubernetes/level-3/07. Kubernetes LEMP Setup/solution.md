## Solution

1. Create all necessary secrets using imperative commands
    `kubectl create secret generic mysql-root-pass --from-literal=password=R00t`
    `kubectl create secret generic mysql-user-pass --from-literal=username=kodekloud_aim --from-literal=password=ksH85UJjhb`
    `kubectl create secret generic mysql-db-url --from-literal=database=kodekloud_db7`
    `kubectl create secret generic mysql-host --from-literal=host=mysql-service`

2. Create configmap using imperative command
    `kubectl create configmap php-config --from-literal=php.ini='variables_order = "EGPCS"'`


3. Create a deployment and make the necessary changes
    `kubectl create deployment lemp-wp --image=webdevops/php-nginx:alpine-3-php7 --dry-run=client -o yaml > deployment.yaml`

4. Expose the nginx conatiner
    `kubectl expose deployment lemp-wp --name=lemp-service --port=80 --type=NodePort --dry-run=client -o yaml > lemp-service.yaml`

5. Expose the mysql container
    `kubectl expose deployment lemp-wp --name=mysql-service  --port=3306 --dry-run=client -o yaml > mysql-service.yaml`

6. Copy the index.php file into the pod and make the variable changes
    `kubectl cp /tmp/index.php <pod-name>:/app/index.php`