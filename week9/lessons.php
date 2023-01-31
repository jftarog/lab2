<!DOCTYPE html>
<html lang="en">
<head>
    <title>JC's Page</title>
    <link rel="icon" type="image/x-icon" href="../images/aonahara.ico">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
    <style>
        body {
            color:white;
        }
    </style>
</head>
<body>
    <div class="navbar"><ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="lessons.html" class="active">W3Schools Lessons</a></li>
        <li><a href="resources.html">Resources</a></li>
    </ul></div>
    
    <h1 id="Lessons">Lessons</h1>
    <h3>This is heading 3</h3>     
    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p> 
    <p>This is a <br> paragraph with a line break.</p> 
    <a href="https://www.youtube.com">This is a link</a> 
    <br>
    <img src="https://yt3.googleusercontent.com/ytc/AMLnZu_oWGO48nKT9hXNvh9QlvAIETAVdISQzib3WZXF=s88-c-k-c0x00ffffff-no-rj" alt="Aonahara Logo">
    <br><br>

    <a href="https://www.w3schools.com">Visit W3Schools</a>
    <br>
    <img src="some_image.jpg" alt="Image of a girl with a jacket"> 
    <p title="I'm a tooltip">This is a paragraph (with a tooltip).</p>

    <!-- This is a comment. --> 
    <p>This <!-- great text --> is a paragraph (with a hidden comment).</p>

    <h1 style="font-size:60px;">Heading 1 with font-size change</h1>
    <hr>
    <p>Above me is a horizontal rule</p>
    <br><p>Line break</p>
    <pre>
        Roses are red
        Violets are blue
    </pre>
    
    <h1 style="color:blue;">This is a heading</h1>
    <p style="color:red;">This is a paragraph.</p> 
    <h1 style="color:blue;">This is a heading</h1>
    <p style="color:red;">This is a paragraph.</p> 
    <h1 style="font-family:verdana;">This is a heading</h1>
    <p style="font-family:courier;">This is a paragraph.</p>
    <h1 style="font-size:300%;">This is a heading</h1>
    <p style="font-size:160%;">This is a paragraph.</p> 
    <h1 style="text-align:center;">Centered Heading</h1>
    <p style="text-align:center;">Centered paragraph.</p> 

    <p>Here is a quote from WWF's website:</p>
    <blockquote cite="http://www.worldwildlife.org/who/index.html">
    For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservation organization, WWF works in nearly 100 countries. At every level, we collaborate with people around the world to develop and deliver innovative solutions that protect communities, wildlife, and the places in which they live.
    </blockquote> 
    <p>WWF's goal is to: <q>Build a future where people live in harmony with nature.</q></p> 
    <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
    <address>
        Written by John Doe.<br>
        Visit us at:<br>
        Example.com<br>
        Box 564, Disneyland<br>
        USA
    </address> 
    <p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>
    <bdo dir="rtl">This text will be written from right to left</bdo>
    <p>This is a <span style="color:blue;font-weight:bold;">span element</span> inside a paragraph</p>
    <div class="city">
        <h2 class="cityTitle">London</h2>
        <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    </div>
    <div class="city">
        <h2 class="cityTitle">Paris</h2>
        <p>Paris is the capital of France.</p>
    </div>
    <div class="city">
        <h2 class="cityTitle">Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
    </div>
    <div class="note">
        <p>File paths work like linux file paths!</p>
    </div>
    <div class="bonjour">
        <h1>Hi!</h1>
    </div>
    
    <a href="#" class="button">Back to top</a>


    <p id="demo"></p>
    <p id="demo2"></p>
    <p id="demo3"></p>
    <button onclick="displayDate('timeDemo')">The time is?</button><p id="timeDemo"></p>
    <p id="greetingDemo"></p>
    <script>
        const fruits = ["Banana", "Orange", "Apple", "Mango"];
        document.getElementById("demo").innerHTML = fruits.toString();
        document.getElementById("demo2").innerHTML = fruits.join(" "); 
        let fruit = fruits.pop();
        document.getElementById("demo3").innerHTML = 
            fruits.toString() + "<br>" + 
            fruit;
        
        const hour = new Date().getHours(); 
        let greeting;

        if (hour < 18) {
            greeting = "Good day";
        } else {
            greeting = "Good evening";
        };

        document.getElementById("greetingDemo").innerHTML = greeting;
    </script>
</body>
</html>