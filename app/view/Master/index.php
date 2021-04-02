<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
  
.topnav {
  background-color: #333;
  overflow: hidden;
  width:100%;
 
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.containner{
    width:100%;height:1500px;border: 1px solid gainsboro;
    background-color:red;
    position:relative;
}

.row{
    padding: 1.5em;
    margin: 3em;
    border: 1px solid #ADD8E6;
    height: auto;
    background-color: white;
     position: absolute;
     width: 90%;
}

.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
        border: 1px solid #DCDCDC;
        float: left;
}
.col-3{
    margin: 0.5em;
    width: 29.5%;
    height: 200px;
    padding: 1em;
}

.col-2{
    margin: 0.5em;
    width: 46%;
    height: 200px;
    padding: 1em;
}

.col-4{
    margin: 0.5em;
    width: 21%;
    height: 200px;
    padding: 1em;
}

.col-5{
    margin: 0.5em;
    width: 70%;
    height: 200px;
    padding: 1em;
}

@media only screen and (max-width: 480px) {
	.col { margin: 1% 0 1% 0%;}
	.col-3 { width:90%; }
        .col-2 { width:90%; }
        .col-4 { width:90%; }
        .col-5 { width:90%; }
        .row{
              padding: 1em;
    margin: 1em;
    border: 1px solid #ADD8E6;
    position: absolute;
    height: auto;
    background-color: white;
    width:80%;
        }
}

@media only screen and (max-width:768px) {
	.col { margin: 1% 0 1% 0%;}
	.col-3 { width:90%; }
        .col-2 { width:90%; }
        .col-4 { width:90%; }
        .col-5 { width:90%; }
        .row{
              padding: 1em;
    margin: 1em;
    border: 1px solid #ADD8E6;
    position: absolute;
    height: auto;
    background-color: white;
    width:80%;
        }
}
.
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
    
    <div class="containner">
        
        <div class="row">
            <div class="col col-3">col-3</div>
            <div class="col col-3">col-3</div>
            <div class="col col-3">col-3</div>
            
            <div class="col col-2">col-2</div>
            <div class="col col-2">col-2</div>
            
            <div class="col col-4">col-4</div>
            <div class="col col-4">col-4</div>
            <div class="col col-4">col-4</div>
            <div class="col col-4">col-4</div>
            
            
             <div class="col col-5">col-5</div>
              <div class="col col-4">col-4</div>
            
        </div>
        
    </div>

</body>
</html>