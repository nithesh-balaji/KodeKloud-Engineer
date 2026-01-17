## Solution

1. Verify volumeMounts on both containers of the pod and make sure they share the same path.
    `kubectl edit pod nginx-phpfpm`

2. Additionally edit the configMap to set the correct document root within the config.
    `kubectl edit configmap nginx-config`

3. Finally, copy the index file in to the document root folder.
    `kubectl cp /home/thor/index.php -c nginx-container nginx-phpfpm:/usr/share/nginx/html/index.php`