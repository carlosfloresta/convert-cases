<?php include 'header.html'?>
<script>
    var lista = document.getElementById("list6");
    lista.classList.add("active");
</script>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Morse Code</h1>

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
                <h5>Morse</h5>
                <textarea  placeholder="Paste or write the morse code you want to convert" class="form-control" style="height:350px;" onkeyup="limite_binaryarea(this.value)" id="binary"></textarea>
                Remaining: <span id="rest2">500000</span> | Character Count: <span id="cont2">0</span> | Lines: <span id="linha2">0</span>  <br>
                <button type="button" id="copy3" onclick="copy2();" class="btn btn-secondary">Copy</button>
                <button type="button" onclick="clear2();" class="btn btn-secondary">Clear</button>
            </div>
        </div>






    </div>


    <div class="container">
        <br><br>

        <h2>Description:</h2>
        <h5>Turn your text or character into morse code or do the opposite, check out the example below:</h5>
        <br><br>

        <h3>Exemple</h3>
        <h6>Text</h6>
        <h6>It if sometimes furnished unwilling as additions so. Blessing resolved peculiar fat graceful ham. Sussex on at really ladies in as elinor. Sir sex opinions age properly extended. Advice branch vanity or do thirty living. Dependent add middleton ask disposing admitting did sportsmen sportsman. </h6>
        <br>
        <h6>Morse Code</h6>
        <code> .. -  /  .. ..-.  /  ... --- -- . - .. -- . ...  /  ..-. ..- .-. -. .. ... .... . -..  /  ..- -. .-- .. .-.. .-.. .. -. --.  /  .- ...  /  .- -.. -.. .. - .. --- -. ...  /  ... --- .-.-.-  /  -... .-.. . ... ... .. -. --.  /  .-. . ... --- .-.. ...- . -..  /  .--. . -.-. ..- .-.. .. .- .-.  /  ..-. .- -  /  --. .-. .- -.-. . ..-. ..- .-..  /  .... .- -- .-.-.-  /  ... ..- ... ... . -..-  /  --- -.  /  .- -  /  .-. . .- .-.. .-.. -.--  /  .-.. .- -.. .. . ...  /  .. -.  /  .- ...  /  . .-.. .. -. --- .-. .-.-.-  /  ... .. .-.  /  ... . -..-  /  --- .--. .. -. .. --- -. ...  /  .- --. .  /  .--. .-. --- .--. . .-. .-.. -.--  /  . -..- - . -. -.. . -.. .-.-.-  /  .- -.. ...- .. -.-. .  /  -... .-. .- -. -.-. ....  /  ...- .- -. .. - -.--  /  --- .-.  /  -.. ---  /  - .... .. .-. - -.--  /  .-.. .. ...- .. -. --. .-.-.-  /  -.. . .--. . -. -.. . -. -  /  .- -.. -..  /  -- .. -.. -.. .-.. . - --- -.  /  .- ... -.-  /  -.. .. ... .--. --- ... .. -. --.  /  .- -.. -- .. - - .. -. --.  /  -.. .. -..  /  ... .--. --- .-. - ... -- . -.  /  ... .--. --- .-. - ... -- .- -. .-.-.-</code>    </div>

    <div class="container">


        <table class="table table-bordered">
  <thead>
    <tr style="text-align: center;">

      <th scope="col">Letter</th>
      <th scope="col">Morse Code</th>

      <th scope="col">Letter</th>
      <th scope="col">Morse Code</th>


    </tr>
  </thead>
  <tbody style="text-align: center;">
    <tr>
      <td>A</td>
      <td>.-</td>
      <td>N</td>
      <td>-.</td>
    </tr>

    <tr>
      <td>B</td>
      <td>-...</td>
      <td>O</td>
      <td>---</td>
    </tr>

    <tr>
      <td>C</td>
      <td>'-.-.'</td>
      <td>P</td>
      <td>.--.</td>
    </tr>

     <tr>
      <td>D</td>
      <td>-..</td>
      <td>Q</td>
      <td>--.-</td>
    </tr>

     <tr>
      <td>E</td>
      <td>.</td>
      <td>R</td>
      <td>.-.</td>
    </tr>

     <tr>
      <td>F</td>
      <td>..-.</td>
      <td>S</td>
      <td>...</td>
    </tr>

     <tr>
      <td>G</td>
      <td>--.</td>
      <td>T</td>
      <td>-</td>
    </tr>

     <tr>
      <td>H</td>
      <td>....</td>
      <td>U</td>
      <td>..-</td>
    </tr>

     <tr>
      <td>I</td>
      <td>..</td>
      <td>V</td>
      <td>...-</td>
    </tr>

     <tr>
      <td>J</td>
      <td>.---</td>
      <td>W</td>
      <td>.--</td>
    </tr>

     <tr>
      <td>K</td>
      <td>-.-</td>
      <td>X</td>
      <td>-..-</td>
    </tr>

     <tr>
      <td>L</td>
      <td>.-..</td>
      <td>Y</td>
      <td>-.--</td>
    </tr>

     <tr>
      <td>M</td>
      <td>--</td>
      <td>Z</td>
      <td>--..</td>
    </tr>



  </tbody>
</table>

        <table class="table table-bordered">
  <thead>
    <tr style="text-align: center;">

      <th scope="col">Number</th>
      <th scope="col">Morse Code</th>

      <th scope="col">Number</th>
      <th scope="col">Morse Code</th>


    </tr>
  </thead>
  <tbody style="text-align: center;">
    <tr>
      <td>0</td>
      <td>-----</td>
      <td>5</td>
      <td>.....</td>
    </tr>

    <tr>
      <td>1</td>
      <td>.----</td>
      <td>6</td>
      <td>-....</td>
    </tr>

    <tr>
      <td>2</td>
      <td>..---</td>
      <td>7</td>
      <td>--...</td>
    </tr>

     <tr>
      <td>3</td>
      <td>...--</td>
      <td>8</td>
      <td>---..</td>
    </tr>

     <tr>
      <td>4</td>
      <td>....-</td>
      <td>9</td>
      <td>----.</td>
    </tr>





  </tbody>
</table>



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



    var converter = {
        'a': '.-',
        'b': '-...',
        'c': '-.-.',
        'd': '-..',
        'e': '.',
        'f': '..-.',
        'g': '--.',
        'h': '....',
        'i': '..',
        'j': '.---',
        'k': '-.-',
        'l': '.-..',
        'm': '--',
        'n': '-.',
        'o': '---',
        'p': '.--.',
        'q': '--.-',
        'r': '.-.',
        's': '...',
        't': '-',
        'u': '..-',
        'v': '...-',
        'w': '.--',
        'x': '-..-',
        'y': '-.--',
        'z': '--..',
        '1': '.----',
        '2': '..---',
        '3': '...--',
        '4': '....-',
        '5': '.....',
        '6': '-....',
        '7': '--...',
        '8': '---..',
        '9': '----.',
        '0': '-----',
        '.': '.-.-.-',
        ',': '--..--',
        '?': '..--..',
        "'": '.----.',
        '!': '-.-.--',
        '/': '-..-.',
        '(': '-.--.',
        ')': '-.--.-',
        '&': '.-...',
        ':': '---...',
        ';': '-.-.-.',
        '=': '-...-',
        '+': '.-.-.',
        '-': '-....-',
        '_': '..--.-',
        '"': '.-..-.',
        '$': '...-..-',
        '@': '.--.-.',
        ' ': ' / '
    }, result = '', messageConverted = [], error = false;




    for (let i = 0; i < input.length; i++) {
            result = result + " " + converter[input.charAt(i).toLowerCase()];


    }

    output.value = result;

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



    var converter = {
        'a': '.-',
        'b': '-...',
        'c': '-.-.',
        'd': '-..',
        'e': '.',
        'f': '..-.',
        'g': '--.',
        'h': '....',
        'i': '..',
        'j': '.---',
        'k': '-.-',
        'l': '.-..',
        'm': '--',
        'n': '-.',
        'o': '---',
        'p': '.--.',
        'q': '--.-',
        'r': '.-.',
        's': '...',
        't': '-',
        'u': '..-',
        'v': '...-',
        'w': '.--',
        'x': '-..-',
        'y': '-.--',
        'z': '--..',
        '1': '.----',
        '2': '..---',
        '3': '...--',
        '4': '....-',
        '5': '.....',
        '6': '-....',
        '7': '--...',
        '8': '---..',
        '9': '----.',
        '0': '-----',
        '.': '.-.-.-',
        ',': '--..--',
        '?': '..--..',
        "'": '.----.',
        '!': '-.-.--',
        '/': '-..-.',
        '(': '-.--.',
        ')': '-.--.-',
        '&': '.-...',
        ':': '---...',
        ';': '-.-.-.',
        '=': '-...-',
        '+': '.-.-.',
        '-': '-....-',
        '_': '..--.-',
        '"': '.-..-.',
        '$': '...-..-',
        '@': '.--.-.',
        ' ': ' / '
    }, result = '', messageConverted = [], error = false;


    input.split(" / ").map(function (word) {
            word.split(" ").map(function (letter) {
            	if(!Object.keys(converter).find( x => converter[x] === letter ))
            		error = true;
                messageConverted.push(Object.keys(converter).find( x => converter[x] === letter ));
            });
           messageConverted.push(" ");
        });
         output.value =    messageConverted.join("") ;

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
