<!DOCTYPE html>
<html lang="em">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> 8 GRAPHICAL ARTS</title>
	<link rel="stylesheet" href="style.css">
	
</head>

<section>
		<nav>
		<ul>
		<li><a href="index.php"> HOME </a></li>
		<li><a href="css.php"> CSS </a></li>
		<li><a href="svg.php"> SVG </a></li>
		<li><a href="canvas.php"> CANVAS </a></li>
		<li><a href="author.php"> ABOUT  </a></li>
		
		</section>


<canvas id="myCanvas1" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
	<script>
			
        var canvas = document.getElementById('myCanvas1');
        var context = canvas.getContext('2d');



 context.beginPath();  
context.strokeStyle = "#ff9933";  
context.fillStyle = "#ff9933";
context.lineWidth = 3;  
context.arc(130, 85, 30, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

   
   context.fillStyle = "#ff9933";


  let height = 200 * Math.cos(Math.PI / 6);

  context.beginPath();
  context.moveTo(90, 10);
  context.lineTo(80, 50);
  context.lineTo(140, 200 - height);
  context.closePath();

  // the outline
  context.lineWidth = 5;
  context.strokeStyle = '#ff9933';
  context.stroke();

  // the fill color
  context.fillStyle = "#ff9933";
  context.fill();

context.beginPath();  
context.strokeStyle = "#804000";  
context.lineWidth = 3;  
context.moveTo(85,0);
context.lineTo(190, 190);
   
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#ffe6e6";  
context.fillStyle =" #ffe6e6";
context.lineWidth = 3;  
context.arc(160, 140, 30, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fillStyle = "#ffe6e6";
context.stroke();  
context.fill();
context.closePath();


 
</script>


<canvas id="myCanvas2" width="200" height="200"
    style="border:1px solid black;">
	</canvas>

<script>
			
        var canvas = document.getElementById('myCanvas2');
        var context = canvas.getContext('2d');
		


context.beginPath();
context.rect(80, 10, 100, 180);
context.fillStyle = 'black';
context.fill();
context.lineWidth = 1;
context.strokeStyle = 'black';
context.stroke();



 context.beginPath();  
context.strokeStyle = "red";  
context.fillStyle ="red";
context.lineWidth = 5;  
context.arc(130, 50, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.stroke();  
context.fill();
context.closePath();

context.beginPath();  
context.strokeStyle = "#ffff00";  
context.fillStyle ="#ffff00";
context.lineWidth = 5;  
context.arc(130, 100, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.stroke();  
context.fill();
context.closePath();

context.beginPath();  
context.strokeStyle = "#00e600";  
context.fillStyle ="#00e600";
context.lineWidth = 5;  
context.arc(130, 150, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.stroke();  
context.fill();
context.closePath();
</script>

<canvas id="myCanvas3" width="200" height="200"
    style="border:1px solid black;">
	</canvas>

<script>
			
        var canvas = document.getElementById('myCanvas3');
        var context = canvas.getContext('2d');
		
context.fillStyle = '#ffb347';
context.beginPath();
context.moveTo(150, 110);
context.lineTo(99, 190);
context.lineTo(50, 110);
context.closePath();
context.fill();

context.beginPath();  
context.strokeStyle = "#ff9999";  
context.fillStyle = "#ff9999";
context.lineWidth = 5;  
context.arc(100, 90, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#996633";  
context.fillStyle = "#996633";
context.lineWidth = 5;  
context.arc(130, 90, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#ffff99";  
context.fillStyle = "#ffff99";
context.lineWidth = 5;  
context.arc(70, 90, 20, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

</script>
<canvas id="myCanvas4" width="200" height="200"
    style="border:1px solid black;">
	</canvas>

<script>
			
        var canvas = document.getElementById('myCanvas4');
        var context = canvas.getContext('2d');


 context.beginPath();  
context.strokeStyle = "#9b6631";  
context.fillStyle = "#9b6631"
context.lineWidth = 5;  
context.arc(100, 100, 70, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

 context.beginPath();  
context.strokeStyle = "#4e3318";  
context.fillStyle = "#4e3318"
context.lineWidth = 5;  
context.arc(100, 100, 3, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#4e3318";  
context.fillStyle = "#4e3318"
context.lineWidth = 5;  
context.arc(150, 100, 4, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();
 
context.beginPath();  
context.strokeStyle = "#4e3318";  
context.fillStyle = "#4e3318"
context.lineWidth = 5;  
context.arc(90, 70, 4, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();
   
context.beginPath();  
context.strokeStyle = "#4e3318";  
context.fillStyle = "#4e3318"
context.lineWidth = 5;  
context.arc(50, 130, 3, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#4e3318";  
context.fillStyle = "#4e3318"
context.lineWidth = 5;  
context.arc(140, 140, 4, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();
</script>

<canvas id="myCanvas5" width="200" height="200"
    style="border:1px solid black;">
	</canvas>

<script>
			
        var canvas = document.getElementById('myCanvas5');
        var context = canvas.getContext('2d');
		
		 context.beginPath();  
context.strokeStyle = "#9b6631";  
context.fillStyle = "#ffcc00"
context.lineWidth = 10;  
context.arc(100, 100, 70, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#cc0000";  
context.fillStyle = "#cc0000";
context.lineWidth = 5;  
context.arc(130, 130, 10, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#cc0000";  
context.fillStyle = "#cc0000";
context.lineWidth = 5;  
context.arc(60, 70, 10, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#cc0000";  
context.fillStyle = "#cc0000";
context.lineWidth = 5;  
context.arc(140, 70, 10, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#cc0000";  
context.fillStyle = "#cc0000";
context.lineWidth = 5;  
context.arc(100, 95, 10, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

context.beginPath();  
context.strokeStyle = "#cc0000";  
context.fillStyle = "#cc0000";
context.lineWidth = 5;  
context.arc(70, 130, 10, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();
</script>

<canvas id="myCanvas6" width="200" height="200"
    style="border:1px solid black;">
	</canvas>

<script>
			
        var canvas = document.getElementById('myCanvas6');
        var context = canvas.getContext('2d');
		
		context.beginPath();
context.rect(80, 10, 100, 180);
context.fillStyle = '#99ccff';
context.fill();
context.lineWidth = 1;
context.strokeStyle = 'black';
context.stroke();

context.fillStyle = "#e6f2ff";
context.fillRect(140,20,25,25);

context.fillStyle = "#e6f2ff";
context.fillRect(100,20,25,25);

context.fillStyle = "#e6f2ff";
context.fillRect(100,60,25,25);

context.fillStyle = "#e6f2ff";
context.fillRect(100,100,25,25);

context.fillStyle = "#e6f2ff";
context.fillRect(140,100,25,25);

context.fillStyle = "#e6f2ff";
context.fillRect(140,60,25,25);


context.beginPath();
context.rect(115, 135, 40, 50);
context.fillStyle = '#ebebe0';
context.fill();
context.lineWidth = 0;
context.strokeStyle = '#ebebe0';
context.stroke();
</script>

<canvas id="myCanvas7" width="200" height="200"
    style="border:1px solid black;">
	</canvas>

<script>
			
        var canvas = document.getElementById('myCanvas7');
        var context = canvas.getContext('2d');
		
context.beginPath();
context.arc(100, 70, 40, 10, 20 * Math.PI);
context.fillStyle = "#ff0000";
context.fill();
context.stroke();


 context.beginPath();  
context.strokeStyle = "black";  
context.lineWidth = 2;  
context.moveTo(155,0);
context.bezierCurveTo(100,90,200,180,100,200);
context.stroke();  
context.closePath();
</script>
<canvas id="myCanvas8" width="200" height="200"
    style="border:1px solid black;">
	</canvas>

<script>
			
        var canvas = document.getElementById('myCanvas8');
        var context = canvas.getContext('2d');
		 context.beginPath();  
context.strokeStyle = "#ffb84d";  
context.fillStyle = "#ffb84d";
context.lineWidth = 5;  
context.arc(100, 100, 70, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();

 context.beginPath();  
context.strokeStyle = "white";  
context.fillStyle = "white";
context.lineWidth = 5;  
context.arc(100, 100, 35, (Math.PI/180)*0, (Math.PI/180)*360, false);  
//full circle  
context.fill();
context.stroke();  
context.closePath();
		
</script>
</body>
</html>
