class MacroFunction {


    constructor() {
        this.getContentToPHP();
        this.copyText();
        this.clearText();
    }

    getContentToPHP() {
        function getContent() {
            //pass the content to the form in order to POST it to the server
            document.getElementById("textarea").value = document.getElementById("text-box").innerHTML;
            //ADD HERE A FUNCTION TO FILTER OUT ANY PREVIOUSLY ADDED SPAN TAGS, SO THE SCANNER.PHP DOES NOT ADD THE SAME TAG MORE THAN ONCE 
        }
        window.addEventListener('keypress', function() {
            getContent();
        })
        window.addEventListener('click', function() {
            getContent();
        })
    }

    copyText() {
        //////// Je ne comprend pas cette fonction (-.-')  //////////
        function copyToClipboard(text) {
            let dummy = document.createElement("textarea");
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand("copy");
            document.body.removeChild(dummy);
        }
        /////////////////////////////////////////////////////////////
        let btnCopyClip = document.querySelector('#copyClip');
        btnCopyClip.onclick = function() {
            let textBox = document.getElementById("text-box");
            let text = textBox.textContent;
            copyToClipboard(text);
        }
    }

    clearText() {
        let btnTrashCan = document.querySelector('#trash-can');
        btnTrashCan.onclick = function() {
            let textBox = document.getElementById("text-box");
            textBox.innerHTML = "";

            //navigator.clipboard.writeText(text);

            // alert("Copied the text: " + text);
        }
    }

}

export default MacroFunction;
