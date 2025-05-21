## Deploy ReplicaSet in Kubernetes Cluster

The Nautilus DevOps team is gearing up to deploy applications on a Kubernetes cluster for migration purposes. A team member has been tasked with creating a ReplicaSet outlined below:


1. Create a ReplicaSet using nginx image with latest tag (ensure to specify as nginx:latest) and name it nginx-replicaset.


2. Apply labels: app as nginx_app, type as front-end.


3. Name the container nginx-container. Ensure the replica count is 4.