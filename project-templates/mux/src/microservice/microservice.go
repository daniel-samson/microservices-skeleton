package main

import (
	"github.com/gorilla/mux"
	"log"
	"net/http"
)

func main() {
	router := mux.NewRouter()
	router.HandleFunc("/", GetHealthEndpoint).Methods("GET")
	router.HandleFunc("/health", GetHealthEndpoint).Methods("GET")
	log.Println("listening on http://localhost:8000")
	log.Fatal(http.ListenAndServe(":8000", router))
}

// GetHealthEndpoint - Ping Entrypoint eg GET /
func GetHealthEndpoint(w http.ResponseWriter, req *http.Request) {
	log.Println("GET /health GetHealthEndpoint")
	_ = mux.Vars(req)

	// params := mux.Vars(req)
	w.Header().Set("Accept", "application/json")
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	w.Write([]byte("{\"status\": \"up\"}"))
}
