var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
const fs = require('fs');
var sleep = require('system-sleep');

var file = function(el)
{
  fs.writeFile("2pac.txt",el, function(err) {
    if(err) {
        return console.log(err);
    }
  
    console.log("The file was saved!");
});
};
while(1)
{
  MongoClient.connect(url, function(err, db) {
    if (err) throw err;
    var dbo = db.db("mydb");
    dbo.collection("posts").findOne({}, function(err, result) {
      if (err) throw err;
      res = result;
      var a,b,c,d;
      a=  result.social.toString();
      b = result.study.toString();
      c = result.video.toString();
      d = result.extra.toString();
      console.log(a + ' '+b+' '+c+' '+d);
      var text = a + ' '+b+' '+c+' '+d;
      file(text);
      db.close();
    });
  });
  sleep(5000);
}
  
   
  


