### Requirements
- PHP 7.2
- composer

### Set up Development Environment

resolve dependencies:
```bash
make deps
```

### Dependencies

```bash
cd microservice
composer require package-name
```

### Accessing Service
You can access the service via: [http://{service-name}.localtest.me/](http://{service-name}.localtest.me/). See the docker-compose-stack.yml file inside the service for details.