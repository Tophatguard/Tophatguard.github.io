function checkFileContent() {
    const fileInput = document.getElementById('fileInput');
    const file = fileInput.files[0];
    const reader = new FileReader();

    reader.onload = function(event) {
        var contents = event.target.result;

        document.getElementById("username").innerText = contents
        window.userName = contents;
        if (contents == "Tophatguard") {
            alert("nope");
            contents = "nope.";
            document.getElementById("username").innerText = contents;
        }
        if (contents == "TophatguardTheReal") {
            alert("nope");
            contents = "nope.";
            document.getElementById("username").innerText = contents;
        }
        if (contents == "TheRealTophatguard") {
            alert("nope");
            contents = "nope.";
            document.getElementById("username").innerText = contents;
        }
        if (contents == "TophatguardYT") {
            alert("nope");
            contents = "nope.";
            document.getElementById("username").innerText = contents;
        }
        if (contents == "Tophatguard[YT]") {
            alert("nope");
            contents = "nope.";
            document.getElementById("username").innerText = contents;
        }
        if (contents == "Tophatguard{YT}") {
            alert("nope");
            contents = "nope.";
            document.getElementById("username").innerText = contents;
        }
        if (contents == "Tophatguard(YT)") {
            alert("nope");
            contents = "nope.";
            document.getElementById("username").innerText = contents;
        }
    };

    reader.readAsText(file);
}