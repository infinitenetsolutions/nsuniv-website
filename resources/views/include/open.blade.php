<section id="myDIV" class="custom-social-proof">
    <div class="custom-notification">
        <div class="custom-notification-container">
            <div class="custom-notification-content-wrapper">
                <a data-toggle="modal" data-target=".bs-example-modal-lg">
                    <img onclick="myFunction()" src="images/mdt-logo.jpg" />
                </a>
            </div>
        </div>
        <div onclick="myFunction()" class="custom-close"></div>
    </div>
</section>

<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
