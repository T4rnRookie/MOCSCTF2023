var express = require('express');
var app = express();

app.get('/', function (req, res) {
  if(RegExp(`^require`).test(req.query.poc)){
    return res.status(500).send("Hacker!")
  }else{
  res.send('Hi,' + eval(req.query.poc));
  console.log(req.query.poc);
}
});

app.listen(8080, function () {
  console.log('listen[+]8080');
});