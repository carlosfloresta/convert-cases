<?php include 'header.html'?>
<script>
    var lista = document.getElementById("list4");
    lista.classList.add("active");
</script>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Hex</h1>

<!-- <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
        -->


        <div class="row">
            <div class="col">
                <h5>Text</h5>
                <textarea autofocus placeholder="Paste or write the text you want to convert" class="form-control" style="height:350px;" onkeyup="limite_textarea(this.value)" id="texto"></textarea>
                Remaining: <span id="rest">50000</span> | Character Count: <span id="cont">0</span> | Lines: <span id="linha">0</span>  <br>
                <button type="button" id="copy" onclick="copy1();" class="btn btn-secondary">Copy</button>
                <button type="button" onclick="clear1();" class="btn btn-secondary">Clear</button>
            </div>
            <div class="col">
                <h5>Hex</h5>
                <textarea  placeholder="Paste or write the hex you want to convert" class="form-control" style="height:350px;" onkeyup="limite_binaryarea(this.value)" id="binary"></textarea>
                Remaining: <span id="rest2">500000</span> | Character Count: <span id="cont2">0</span> | Lines: <span id="linha2">0</span>  <br>
                <button type="button" id="copy3" onclick="copy2();" class="btn btn-secondary">Copy</button>
                <button type="button" onclick="clear2();" class="btn btn-secondary">Clear</button>
            </div>
        </div>






    </div>


    <div class="container">
        <br><br>

        <h2>Description:</h2>
        <h5>Turn your text or character into hex or do the opposite, check out the example below:</h5>
        <br><br>

        <h3>Exemple</h3>
        <h6>Text</h6>
        <h6>It real sent your at. Amounted all shy set why followed declared. Repeated of endeavor mr position kindness offering ignorant so up. Simplicity are melancholy preference considered saw companions. Disposal on outweigh do speedily in on. Him ham although thoughts entirely drawings. Acceptance unreserved old admiration projection nay yet him. Lasted am so before on esteem vanity oh. </h6>
        <br>
        <h6>Hex</h6>
        <code>4974207265616c2073656e7420796f75722061742e20416d6f756e74656420616c6c20736879207365742077687920666f6c6c6f776564206465636c617265642e205265706561746564206f6620656e646561766f72206d7220706f736974696f6e206b696e646e657373206f66666572696e672069676e6f72616e7420736f2075702e2053696d706c696369747920617265206d656c616e63686f6c7920707265666572656e636520636f6e736964657265642073617720636f6d70616e696f6e732e20446973706f73616c206f6e206f7574776569676820646f207370656564696c7920696e206f6e2e2048696d2068616d20616c74686f7567682074686f756768747320656e746972656c792064726177696e67732e20416363657074616e636520756e7265736572766564206f6c642061646d69726174696f6e2070726f6a656374696f6e206e6179207965742068696d2e204c617374656420616d20736f206265666f7265206f6e2065737465656d2076616e697479206f682e20</code>
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


        var output = document.getElementById("binary");
        var input = document.getElementById("texto").value;
        output.value = "";




     output.value = input.split("")
     .map(c => c.charCodeAt(0).toString(16))
     .join("");


    }

    function limite_binaryarea(valor) {
        quant = 500000;
        total = valor.length;
        if (total <= quant) {
            resto = quant - total;

            document.getElementById('rest2').innerHTML = resto;
            document.getElementById('cont2').innerHTML = quant - resto;
        } else {
            document.getElementById('binary').value = valor.substr(0, quant);
        }

        var texto = document.getElementById('binary').value;

        var n = texto.split('\n').length;
        document.getElementById('linha2').innerHTML = n;


        var output = document.getElementById("texto");
        var input = document.getElementById("binary").value;

        output.value = "";




     output.value =  input.split(/(\w\w)/g)
   .filter(p => !!p)
   .map(c => String.fromCharCode(parseInt(c, 16)))
   .join("");




    }






    function clear1() {

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





    function clear2() {



        document.getElementById("binary").value = "";
        document.getElementById('cont2').innerHTML = "0";
        document.getElementById('linha2').innerHTML = "0";
        document.getElementById('rest2').innerHTML = "500000";
    }

    function copy2() {
        var texto2 = document.getElementById('binary');

        texto2.select();
        texto2.setSelectionRange(0, 99999999);
        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
            document.getElementById("copy3").innerHTML = "Copied!";
            document.getElementById("copy3").style.backgroundColor = "#28a745";

            setTimeout(function () {

                document.getElementById("copy3").innerHTML = "Copy";
                document.getElementById("copy3").style.backgroundColor = "#6c757d";

            }, 2000); // O tempo em milisegundos. 1 segundo = 1000 milisegundos.

        } catch (err) {
            console.log('Oops, unable to copy');
        }
    }

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script></body>
</html>
