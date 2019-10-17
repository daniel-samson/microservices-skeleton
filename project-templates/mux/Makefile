app:
	go install microservice/

deps:
	go get github.com/gorilla/mux
	go get github.com/shopspring/decimal
	# add your dependencies here

run:
	$(GOPATH)/bin/microservice

fmt:
	gofmt -w $(GOPATH)/src/microservice/

test:
	go test  -v microservice/

lint:
	golint $(GOPATH)/src/microservice/

coverage:
	go test -covermode=atomic microservice/