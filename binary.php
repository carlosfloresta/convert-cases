<?php include 'header.html'?>
<script>
    var lista = document.getElementById("list3");
    lista.classList.add("active");
</script>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Binary</h1>
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
                <h5>Binary</h5>
                <textarea  placeholder="Paste or write the binary you want to convert" class="form-control" style="height:350px;" onkeyup="limite_binaryarea(this.value)" id="binary"></textarea>
                Remaining: <span id="rest2">500000</span> | Character Count: <span id="cont2">0</span> | Lines: <span id="linha2">0</span>  <br>
                <button type="button" id="copy3" onclick="copy2();" class="btn btn-secondary">Copy</button>
                <button type="button" onclick="clear2();" class="btn btn-secondary">Clear</button>
            </div>
        </div>
    </div>

    <div class="container">
        <br><br>
        <h2>Description:</h2>
        <h5>Turn your text or character into binary or do the opposite, check out the example below:</h5>
        <br><br>
        <h3>Exemple</h3>
        <h6>Text</h6>
        <h6>Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. New get described applauded incommode shameless out extremity but. Resembled at perpetual no believing is otherwise sportsman. Is do he dispatched cultivated travelling astonished. Melancholy am considered possession on collecting everything.</h6>
        <br>
        <h6>Binary</h6>
        <code style="font-size: 10px;">01000010 01100001 01110010 01110100 01101111 01101110 0100000 01100100 01101001 01100100 0100000 01100110 01100101 01100101 01100010 01101100 01111001 0100000 01100011 01101000 01100001 01101110 01100111 01100101 0100000 01101101 01100001 01101110 0100000 01110011 01101000 01100101 0100000 01100001 01100110 01100110 01101111 01110010 01100100 0100000 01110011 01110001 01110101 01100001 01110010 01100101 0100000 01100001 01100100 01100100 0101110 0100000 01010111 01100001 01101110 01110100 0100000 01100101 01111001 01100101 01110011 0100000 01100010 01111001 0100000 01101110 01100101 01100001 01110100 0100000 01110011 01101111 0100000 01101010 01110101 01110011 01110100 0100000 01101101 01110101 01110011 01110100 0101110 0100000 01010000 01100001 01110011 01110100 0100000 01100100 01110010 01100001 01110111 0100000 01110100 01100001 01101100 01101100 0100000 01110101 01110000 0100000 01100110 01100001 01100011 01100101 0100000 01110011 01101000 01101111 01110111 0100000 01110010 01100101 01101110 01110100 0100000 01101111 01101000 0100000 01101101 01110010 0101110 0100000 01010010 01100101 01110001 01110101 01101001 01110010 01100101 01100100 0100000 01101001 01110011 0100000 01100100 01100101 01100010 01100001 01110100 01101001 01101110 01100111 0100000 01100101 01111000 01110100 01100101 01101110 01100100 01100101 01100100 0100000 01110111 01101111 01101110 01100100 01100101 01110010 01100101 01100100 0100000 01100001 01110011 0100000 01100100 01101111 0101110 0100000 01001110 01100101 01110111 0100000 01100111 01100101 01110100 0100000 01100100 01100101 01110011 01100011 01110010 01101001 01100010 01100101 01100100 0100000 01100001 01110000 01110000 01101100 01100001 01110101 01100100 01100101 01100100 0100000 01101001 01101110 01100011 01101111 01101101 01101101 01101111 01100100 01100101 0100000 01110011 01101000 01100001 01101101 01100101 01101100 01100101 01110011 01110011 0100000 01101111 01110101 01110100 0100000 01100101 01111000 01110100 01110010 01100101 01101101 01101001 01110100 01111001 0100000 01100010 01110101 01110100 0101110 0100000 01010010 01100101 01110011 01100101 01101101 01100010 01101100 01100101 01100100 0100000 01100001 01110100 0100000 01110000 01100101 01110010 01110000 01100101 01110100 01110101 01100001 01101100 0100000 01101110 01101111 0100000 01100010 01100101 01101100 01101001 01100101 01110110 01101001 01101110 01100111 0100000 01101001 01110011 0100000 01101111 01110100 01101000 01100101 01110010 01110111 01101001 01110011 01100101 0100000 01110011 01110000 01101111 01110010 01110100 01110011 01101101 01100001 01101110 0101110 0100000 01001001 01110011 0100000 01100100 01101111 0100000 01101000 01100101 0100000 01100100 01101001 01110011 01110000 01100001 01110100 01100011 01101000 01100101 01100100 0100000 01100011 01110101 01101100 01110100 01101001 01110110 01100001 01110100 01100101 01100100 0100000 01110100 01110010 01100001 01110110 01100101 01101100 01101100 01101001 01101110 01100111 0100000 01100001 01110011 01110100 01101111 01101110 01101001 01110011 01101000 01100101 01100100 0101110 0100000 01001101 01100101 01101100 01100001 01101110 01100011 01101000 01101111 01101100 01111001 0100000 01100001 01101101 0100000 01100011 01101111 01101110 01110011 01101001 01100100 01100101 01110010 01100101 01100100 0100000 01110000 01101111 01110011 01110011 01100101 01110011 01110011 01101001 01101111 01101110 0100000 01101111 01101110 0100000 01100011 01101111 01101100 01101100 01100101 01100011 01110100 01101001 01101110 01100111 0100000 01100101 01110110 01100101 01110010 01111001 01110100 01101000 01101001 01101110 01100111 0101110</code>
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
        for (var i = 0; i < input.length; i++) {
            output.value += "0" + input[i].charCodeAt(0).toString(2) + " ";
        }
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
        var splitStr = input.split(" ");
        var newVar = splitStr.map(function (val) {
            return String.fromCharCode(parseInt(val, 2).toString(10));
        });
        output.value = newVar.join("");
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
