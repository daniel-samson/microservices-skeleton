### Requirements
- go
- gofmt

### Set up Development Environment

```bash
cd project-name
source .env
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
Add your dependancies to the makefile

```Makefile
deps:
	go get github.com/gorilla/mux
	go get github.com/shopspring/decimal
	# add your dependencies here...
```