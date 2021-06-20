<?php include 'header.html'?>
<script>
    var lista = document.getElementById("list2");
    lista.classList.add("active");
</script>

        <!-- Begin page content -->
        <main role="main" class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-5">Replace</h1>
                <h5>Replace one word with another</h5>
                <!-- <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
                -->
                <textarea autofocus placeholder="Paste or write the text you want to convert" class="form-control" style="height:350px;" onkeyup="limite_textarea(this.value)" id="texto"></textarea>
                Remaining: <span id="rest">50000</span> | Character Count: <span id="cont">0</span> | Lines: <span id="linha">0</span>  <br>

                Find What: <input id="find"  type="text">

                Replace with: <input id="replace" type="text">


                <button type="button" onclick="replace1();" class="btn btn-secondary">Replace</button>

                <button type="button" id="copy" onclick="copy1();" class="btn btn-secondary">Copy</button>
                <button type="button" onclick="clear1();" class="btn btn-secondary">Clear</button>

            </div>


            <div class="container">

                <br><br>
                <h2>Description:</h2>

                <h5>Replace words in your text simply and quickly.<br>

Below is an example of how the text looks before and after conversion:</h5>
                <br><br>

                <h3>Exemple</h3>
                <h6>Text 1:<br>Denote text1 simple fat denied add worthy little use. As some he so high down am week. Conduct esteems by cottage to pasture we winding. On assistance he cultivated text1 considered frequently. Person how having tended direct own day text1 man. Saw sufficient indulgence one own you inquietude sympathize text1. </h6>
                <h6>Text 2:<br>Denote text2 simple fat denied add worthy little use. As some he so high down am week. Conduct esteems by cottage to pasture we winding. On assistance he cultivated text2 considered frequently. Person how having tended direct own day text2 man. Saw sufficient indulgence one own you inquietude sympathize text2. </h6>
            </div>




        </main>

        <footer class="footer mt-auto py-3">
            <div class="container">
                <span class="text-muted">Copyright ©2020 ConvertCases.net</span>
            </div>
        </footer>

        <script>

            function limite_textarea(valor) {
                quant = 50000;
                total = valor.length;
                if (total <= quant) {
                    resto = quant - total;

                    document.getElementById('rest').innerHTML = resto;
                    document.getElementById('cont').innerHTML = quant - resto;
                } else {
                    document.getElementById('texto').value = valor.substr(0, quant);
                }

                var texto = document.getElementById('texto').value;

                var n = texto.split('\n').length;
                document.getElementById('linha').innerHTML = n;
            }

            function replace1() {

                var texto = document.getElementById('texto').value;
                var find2 = document.getElementById('find').value;

                var regexp = new RegExp(find2, 'g');
                var replace2 = document.getElementById('replace').value;


                texto = texto.replace(regexp, replace2);

                document.getElementById("texto").value = texto;

            }



            function clear1() {

                document.getElementById('find').value = "";
                document.getElementById('replace').value = "";
                document.getElementById("texto").value = "";
                document.getElementById('cont').innerHTML = "0";
                document.getElementById('linha').innerHTML = "0";
                document.getElementById('rest').innerHTML = "50000";
            }

            function copy1() {
                var texto = document.getElementById('texto');

                texto.select();
                texto.setSelectionRange(0, 99999);
                try {
                    var successful = document.execCommand('copy');
                    var msg = successful ? 'successful' : 'unsuccessful';
                    console.log('Copying text command was ' + msg);
                    document.getElementById("copy").innerHTML = "Copied!";
                    document.getElementById("copy").style.backgroundColor = "#28a745";

                    setTimeout(function () {

                        document.getElementById("copy").innerHTML = "Copy";
                        document.getElementById("copy").style.backgroundColor = "#6c757d";

                    }, 2000); // O tempo em milisegundos. 1 segundo = 1000 milisegundos.

                } catch (err) {
                    console.log('Oops, unable to copy');
                }
            }

        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script></body>
</html>
