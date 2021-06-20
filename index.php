
<?php include 'header.html'?>
<script>
    var lista = document.getElementById("list1");
    lista.classList.add("active");
</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170992527-1"></script>


<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Convert Cases</h1>
        <h5>Convert your text simply and quickly!</h5>
        <!-- <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
        -->
        <textarea autofocus placeholder="Paste or write the text you want to convert" class="form-control" style="height:350px;" onkeyup="limite_textarea(this.value)" id="texto"></textarea>
        Remaining: <span id="rest">50000</span> | Character Count: <span id="cont">0</span> | Lines: <span id="linha">0</span>  <br>

        <button type="button" onclick="sentencecase();" class="btn btn-secondary">Sentence case</button>
        <button type="button" onclick="lowercase();" class="btn btn-secondary">lower case</button>
        <button type="button" onclick="uppercase();" class="btn btn-secondary">UPPER CASE</button>
        <button type="button" onclick="capitalizedcase();" class="btn btn-secondary">Capitalized Case</button>
        <button type="button" onclick="titlecase();" class="btn btn-secondary">Title Case</button>
        <button type="button" onclick="inversecase();" class="btn btn-secondary">InVeRsE cAsE</button>
        <button type="button" onclick="alternatingcase();" class="btn btn-secondary">aLtErNaTiNg CaSe</button>
        <button type="button" id="copy" onclick="copy1();" class="btn btn-secondary">Copy</button>
        <button type="button" onclick="clear1();" class="btn btn-secondary">Clear</button>

    </div>


    <div class="container">

        <br><br>
        <h2>Description:</h2>
        <h5>Here you will find several ways to convert text quickly and accurately.
Can you convert to:</h5>

        <br><br>

        <h3>Sentense case</h3>
        <h6>Sentence case is the conventional way of using capital letters in a sentence or capitalizing only the first word and any proper nouns.<br>

            In most newspapers in the U.S. and in virtually all publications in the U.K., sentence case, also known as down style and reference style, is the standard form for headline.<br><br>Exemple: <u>S</u>entence case is the conventional</h6>

        <br><br>

        <h3>lower case</h3>

        <h6>The minuscule or small letters (a, b, c, as opposed to the uppercase or capital letters, A, B, C).<br>
            The strongest passwords are those which mix numbers and letters, upper case and lower case, and symbols.<br><br>Exemple: <u>the minuscule or small letters</u></h6>

        <br><br>

        <h3>UPPER CASE</h3>

        <h6>Collective term for the capital letters A, B, C, ... as opposed to the small letters a, b, c, ....<br><br>Exemple: <u>COLLECTIVE TERM FOR THE CAPITAL LETTERS</u></h6>

        <br><br>

        <h3>Capitalized Case</h3>

        <h6>First letter of the word uppercase and the remainder lowercase.<br><br>Exemple: <u>F</u>irst <u></u>Letter <u>O</u>f <u>T</u>he <u>W</u>ord <u>U</u>ppercase <u>A</u>nd <u>T</u>he <u>R</u>emainder <u>L</u>owercase</h6>

        <br><br>

        <h3>Title Case</h3>
        <h6>First letter of the word uppercase and the remainder lowercase, except for articles, prepositions, and conjunctions.<br><br>Exemple: <u>F</u>irst <u>L</u>etter <u>o</u>f <u>T</u>he <u>W</u>ord <u>U</u>ppercase</h6>

        <br><br>
        <h3>InVeRsE cAsE</h3>
        <h6>First capital letter following alternating between lower case and upper case.<br><br>Exemple: FiRsT CaPiTaL LeTtEr fOlLoWiNg aLtErNaTiNg</h6>

        <br><br>
        <h3>aLtErNaTiNg CaSe</h3>
        <h6>The opposite of inverse case.<br><br>Exemple: tHe oPpOsItE Of iNvErSe cAsE</h6>
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

    function sentencecase() {

        var rg = /(^\s*\w{1}|\.\s*\w{1})/gim;
        var texto = document.getElementById('texto').value;
        texto = texto.toLowerCase().replace(rg, function (toReplace) {
            return toReplace.toUpperCase();
        });

        document.getElementById("texto").value = texto;

    }

    function lowercase() {
        var texto = document.getElementById('texto').value;
        texto = texto.toLowerCase();

        document.getElementById("texto").value = texto;
    }

    function uppercase() {
        var texto = document.getElementById('texto').value;
        texto = texto.toUpperCase();

        document.getElementById("texto").value = texto;
    }

    function capitalizedcase() {

        var texto = document.getElementById('texto').value;
        texto = texto.toLowerCase().replace(/(?:^|\s)\S/g, function (a) {
            return a.toUpperCase();
        });

        document.getElementById("texto").value = texto;
    }

    function titlecase() {


        var rg = /(^\s*\w{1}|\.\s*\w{1})/gim;
        var texto = document.getElementById('texto').value;
        texto = texto.toLowerCase().replace(rg, function (toReplace) {
            return toReplace.toUpperCase();
        });

        var words = texto.split(" ");
        for (var a = 0; a < words.length; a++) {
            var w = words[a];

            var firstLetter = w[0];

            if (w.length > 2) {
                w = firstLetter.toUpperCase() + w.slice(1);
            } else {
                w = firstLetter + w.slice(1);
            }

            words[a] = w;
        }
        words = words.join(" ");


        document.getElementById("texto").value = words;

    }

    function inversecase() {
        var texto = document.getElementById('texto').value;
        texto = texto.split('').map((c, i) =>
                i % 2 == 0 ? c.toUpperCase() : c.toLowerCase()
                ).join('');

        document.getElementById("texto").value = texto;
    }

    function alternatingcase() {
        var texto = document.getElementById('texto').value;
        texto = texto.split('').map((c, i) =>
                i % 2 == 0 ? c.toLowerCase() : c.toUpperCase()
                ).join('');

        document.getElementById("texto").value = texto;
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


</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>');</script><script src="bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script></body>
</html>
