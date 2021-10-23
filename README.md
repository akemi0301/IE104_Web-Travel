# IE104_Web-Travel
Đồ án môn học IE104
## Cách để get header.

    <body>
        <div id="includedContent"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script> 
            $(function(){
              $("#includedContent").load("header.html"); 
            });
        </script>
    </body>

## Get footer
trong folder css có file footer.css
trong folder js có file footer.js
=> muốn get footer thì trong file .html muốn get, gán link vào:

    <head>
        <link rel="stylesheet" href="css/footer.css">
    </head>
    
    <body>
        <footer><footer>
        <script src="js/footer.js"></script>
    </body>
