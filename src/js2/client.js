const request = require('request');
request('http://140.136.156.12:8080/getinfo/all/', function (error, response, body) {
   console.error('error:', error);
   console.log('statusCode:', response && response.statusCode);
   console.log('head:', response.headers);
   console.log('body:', body);
});