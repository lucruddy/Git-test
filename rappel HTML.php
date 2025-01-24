<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <button onclick="maFonction ()">Mon bouton</button>
        <ul id="liste"></ul>

        <script>
            let nb = 1;
            function maFonction (){
                let node = document.createElement("li");
                let textnode = document.createTextNode ("liste n° ${nb++}");
                node.appendChild(textnode);

                document.getElementById("liste").appendChild(node);
            }
        </script>
    
    </body>
</html>