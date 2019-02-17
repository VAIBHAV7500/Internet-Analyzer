<!DOCTYPE html>
<?php

$fh = fopen('C:\node\2pac.txt','r');
while ($line = fgets($fh)) {
  // <... Do your work with the line ...>
  echo($line);
  $m = $line;
}
fclose($fh);
?>
<?php
      $somevar=' ';
      $somevar = $_GET["uid"];
      echo $somevar;
   $myfile = fopen("toggle.txt", "w") or die("Unable to open file!");
   fwrite($myfile, $somevar);
   fclose($myfile);
?>

<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="./style2.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.first
{
  font-size:15px;
 font-weight:bold;
  position: absolute;
  right: 0;
}
</style>
<body>
  <div class="first">
    Social Site Blocker
    <label class="switch">
        <input type="checkbox" id="toggle">
              <span class="slider round"></span>
    </label>
  </div>
<div class="w3-container">

  <div>
    <div class='angrytext'>
    Personal Internet Analyzer
  </div>
  </div>

  <div class="w3-light-grey w3-round-large">
  Social Networking
    <div class="w3-container w3-blue w3-round-large social" style="width:30%">30%</div>
    <div>.</div>
  </div><br>
  
  <div class="w3-light-grey w3-round-large">
  Study Websites
    <div class="w3-container w3-blue w3-round-large study" style="width:25%">25%</div>
    <div>.</div>
  </div><br>
  
  <div class="w3-light-grey w3-round-large">
  Video Buffering 
    <div class="w3-container w3-blue w3-round-large video" style="width:50%">50%</div>
    <div>.</div>
  </div><br>
  
  <div class="w3-light-grey w3-round-large">
  Extras
    <div class="w3-container w3-blue w3-round-large extra" style="width:74%">74%</div>
    <div>.</div>
  </div><br>
</div>
<!--<script src="javascript.js"></script>-->
<script>	
    var x="<?php echo $m ?>";
    try {
            var uid = <?php echo $somevar ?>;
            var state;
            if(uid==1)
               state =true;
            else
               state =false;
            document.getElementById("toggle").checked = state;
      }
      catch(err) {
         document.getElementById("demo").innerHTML = err.message;
      }
     document.getElementById('toggle').addEventListener('click',function()
      {
            var x = document.getElementById("toggle").checked;
            if(x==false)
               x=0;
            else
               x=1;
            window.location.href="index1.php?uid="+x;
      });
    console.log(x);
    var y = x.split(' ');
    console.log(y);
    let social,study,video,extra;
    social = y[0];
    study = y[1];
    video = y[2];
    extra  = y[3];
    //social 
    document.querySelector('.social').textContent = parseInt(social) + "%";
    document.querySelector('.social').style.width = social + '%';

    //study
    let studySelector = document.querySelector('.study');
    studySelector.textContent = parseInt(study) + '%';
    studySelector.style.width = study + '%';


    //video
    let videoSelector = document.querySelector('.video');
    videoSelector.textContent = parseInt(video) + '%';
    videoSelector.style.width = video + '%';


    //extra
    let extraSelector = document.querySelector('.extra');
    extraSelector.textContent = parseInt(extra) + '%';
    extraSelector.style.width = extra + '%'
</script>
</body>
</html>

