## Execute Rolling Updates in Kubernetes

An application currently running on the Kubernetes cluster employs the nginx web server. The Nautilus application development team has introduced some recent changes that need deployment. They've crafted an image nginx:1.17 with the latest updates.


Execute a rolling update for this application, integrating the nginx:1.17 image. The deployment is named nginx-deployment.

Ensure all pods are operational post-update.