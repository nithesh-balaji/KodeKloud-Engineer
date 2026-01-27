## Solution

1. Create config and make changes
    `kubectl create cm php-config --dry-run=client -o yaml > config.yaml`

2. Create deployment and make changes
    `kubectl create deploy lamp-wp --image=webdevops/php-apache:alpine-3-php7 --dry-run=client -o yaml > deploy.yaml`

3. Create secret and make changes
    `kubectl create secret generic mysql-secret --dry-run=client -o yaml > secret.yaml`

4. Create all the files
    `kubectl create -f *.yaml`

5. Expose httpd-pod by creating a service and making necessary changes 
    `kubectl expose deployment lamp-wp --name=httpd-php-container --port=80 --type=NodePort --dry-run=client -o yaml`

6. Expose mysql-pod by creating a service and making necessary changes 
    `kubectl expose deployment lamp-wp --port=3306 --name=mysql-service --dry-run=client -o yaml`

7. Create all the files
    `kubectl create -f *.yaml`

8. Edit the index.php file provided to get your env vars referred
    `vi /tmp/index.php`

9. Copy the index file to httpd container
    `kubectl cp /tmp/index.php lamp-wp-569bc985f5-zbdd8:/app -c httpd-php-container`

10. Restart httpd to make the container pick up the env vars
    `kubectl exec -it lamp-wp-569bc985f5-zbdd8 -c httpd-php-container -- service php-fpm restart`