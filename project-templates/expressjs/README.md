### Requirements
- go
- gofmt

### Set up Development Environment

```bash
cd project-name
source .env
```

tools:
resolve dependencies:
```bash
make tools
```

resolve dependencies:
```bash
make deps
```

build:
```bash

make
```

Run automated tests:

```bash
make test
```

Run stand-alone
```bash
make run
```

Run linter
```bash
make lint
```

Automatically format code
```bash
make fmt
```

View Code Coverage
```bash
make coverage
```

### Dependencies
Add your dependancies to the packages.json

### Accessing Service
You can access the service via: [http://{service-name}.localtest.me/](http://{service-name}.localtest.me/). See the docker-compose-stack.yml file inside the service for details.