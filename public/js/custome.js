// Initialize the Fabric.js canvas
let canvas = new fabric.Canvas("tshirt-canvas");

//

// Upload a custom picture and display it on the T-shirt
document.getElementById("tshirt-custompicture").addEventListener(
    "change",
    function (e) {
        var reader = new FileReader();

        reader.onload = function (event) {
            var imgObj = new Image();
            imgObj.src = event.target.result;

            imgObj.onload = function () {
                var img = new fabric.Image(imgObj);
                img.scaleToHeight(100);
                img.scaleToWidth(100);
                canvas.centerObject(img);
                canvas.add(img);
                canvas.renderAll();
            };
        };

        if (e.target.files[0]) {
            reader.readAsDataURL(e.target.files[0]);
        }
    },
    false
);

// Remove selected object on pressing DELETE key
document.addEventListener(
    "keydown",
    function (e) {
        if (e.keyCode == 46) {
            canvas.remove(canvas.getActiveObject());
        }
    },
    false
);

// Update T-shirt color based on selected radio button
let TshirtDiv = document.querySelectorAll('input[name="tshirt-color"]');
document.getElementById("tshirt-div").style.backgroundColor =
    TshirtDiv[0].value;
TshirtDiv.forEach(function (input) {
    input.addEventListener("change", function () {
        document.getElementById("tshirt-div").style.backgroundColor =
            this.value;
    });
});

function openMenu() {
    document.getElementById("drawerDiv").classList.add("menu-open");
}

function closeMenu() {
    document.getElementById("drawerDiv").classList.remove("menu-open");
}
