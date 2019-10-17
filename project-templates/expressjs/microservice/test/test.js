var supertest = require("supertest");
var should = require("should");
var assert = require('assert');
// This agent refers to PORT where program is runninng.

var server = supertest.agent("http://localhost:8000");

// UNIT test begin

describe("health",function(){

  // #1 should return home page

  it("should return home page",function(done){

    // calling home page api
    server
    .get("/")
    .expect("Content-type","application/json; charset=utf-8")
    .expect(200) // THis is HTTP response
    .end(function(err,res) {
      // HTTP status should be 200
      assert(typeof err, "undefined")
      res.status.should.equal(200);
      assert.equal(res.body.status, "up");
      done();
    });
  });

});