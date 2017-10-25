<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<script type="text/javascript">
//$(document).ready(function(){
//  $("button").click(function(){
//  $("#btn").click(function(){


//  function aa(){
//  $.post("insertHelp.php",
//function(data){
//  alert("Data Loaded: " + data);
//  });
//};

function aa(){
    $.post("insertHelp.php",{content:"123456"},function(data){
        alert("Data Loaded: " + data);
    });
};

// });
 </script>
</head>
<body>
<button id="btn" onclick="aa()">获取</button>
</body>
</html>
