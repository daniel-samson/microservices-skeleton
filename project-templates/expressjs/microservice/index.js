const express = require('express')
const app = express()
const port = 8000

app.get('/', (req, res) => { 
	res.setHeader('Content-Type', 'application/json');
	res.send(JSON.stringify({status:"up"}))
})

app.get('/health', (req, res) => { 
	res.setHeader('Content-Type', 'application/json');
	res.send(JSON.stringify({status:"up"}))
})

app.listen(port, () => console.log(`Example app listening on http://localhost:${port}/`))