<!DOCTYPE html>
 <html>
     <head>
     <meta charset="utf-8">
	<title>home page </title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Signika+Negative:400,700);

html, body {
  height:100%;
  font-family: 'Signika Negative', sans-serif;
  font-size: 25px;
}

html {
  background: url('https://2.bp.blogspot.com/-SUMDIuZ7m48/TeWj1YDWcNI/AAAAAAAABhg/9fjPiDZHwms/s1600/winter.JPG') fixed;
  background-size: 100%;
}

div {
  overflow: hidden;
}

a {
  color: #322bff;
  text-decoration: underline;
  transition: 500ms;
}
a:hover {
  color: #26a1ff;
}

p {
  padding: 0 5%;
}

img {
  box-shadow: 0px 0px 4px #000;
}

#header {
  background: rgba(255, 255, 255, .5);
  padding: 1%;
  overflow: hidden;
  height: 55px;
}
#header img {
  float: left;
  box-shadow: none;
}
#header ul {
  list-style: none;
  float: left;
  padding-left: 10px;
  margin-top: 15px;
}
#header ul li {
  float: left;
  margin-left: 10px;
  font-size: 20px;
}

.fullscreen {
  height: 95%;
  position: relative;
}
.fullscreen .header {
  position: absolute;
  bottom: 0;
  text-align: center;
  width: 100%;
  color: #fff;
  text-shadow: 0px 0px 2px #000;
}

.white {
  background: #eeeeec;
  padding: 0 5%;
}
.nobg {
  background: none;
  padding: 0 5%;
  color: #fff;
  text-shadow: 0px 0px 4px #000;
}
.semitrans {
  background: rgba(255, 255, 255, .5);
  padding: 0 5%;
}
.dark {
  color: #eeeeec;
  background: #010105;
  padding: 0 5%;
}

.nopadding {
  padding: 0;
}

.floatleft {
  float: left;
  margin: 2%;
}
.floatright {
  float: right;
  margin 2%;
}

.more {
  text-align: center;
  font-size: 17px;
}
.more a {
  color: #aaa;
  text-decoration: none;
  cursor: pointer;
}
.more a:hover {
  color: #777;
}


</style>



<body>
<div class="fullscreen nopadding">
  <div id="header">
    <img src="https://blog.codepen.io/wp-content/uploads/2012/06/Button-Black-Small.png" width="50px" />
    <ul>
      <li>Home</li>
      <li>About</li>
    </ul>
  </div>
  <div class="header">
    <h1>Welcome to the home page</h1>
  </div>
</div>

<div class="white nopadding more">
  <a id="more">&#x25BC; More &#x25BC;</a>
</div>



</body>
</head>