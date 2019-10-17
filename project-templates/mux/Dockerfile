FROM golang:1.8
WORKDIR /go/src/app
ENV GOPATH /go/src/app
COPY . .
RUN make deps
RUN make
EXPOSE 8000
CMD ["/go/src/app/bin/microservice"]