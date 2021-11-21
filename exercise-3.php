<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Exercise 3 - Getting HTML Contents of an Element using jQuery</title>
</head>
<script type = "text/javascript" src=jquery-3.6.0.js></script>

<script>
    $ (document).ready (function () {
        $('.btn-one').click (function() {
            alert ($("p").text());
            }) ;
            }) ;

    $ (document).ready (function () {
        $('.btn-two').click (function() {
            alert ($("p").text());
            }) ;
            }) ;        
</script>

<body>
    <button type="button" class="btn-one">Show me Paragraph's HTML Contents</button>
    <button type="button" class="btn-two">Show me Container's HTML Contents</button>
    <div id="container">
        <h1>Hello Advanced Programming!</h1>
        <p>This is <b>exercise</b> three.</p>
    </div>
</body>
</html>