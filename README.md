Microservices Skeleton
====

Sets un the development environment that is suited for microservice archietecture.


### Requirements:

- bash
- Docker
- Docker Compose
- Docker Swarm


### Set up swarm
```bash
docker swarm init
```

### Set up environment / workspace
```bash
source .env
```

### Set up services

```bash
web-services-setup
```

### Build Services

```bash
web-services-build
```

### Deploy Services

```bash
web-services-deploy
```

### Create a new service
To create a service from a template use:
```bash
web-services-new
```
### Clean Services

```bash
web-services-remove
```

### Accessing Service
You can access the service via: (http://{service-name}.localtest.me/)[http://{service-name}.localtest.me/]. See the docker-compose-stack.yml file inside the service for details.

