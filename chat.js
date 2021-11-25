(document).ready(function () {
    //setting open and close

    $(document).on("click", ".setting", function () {
        $(".messenger-setting").toggle();
    });

    //profile image click

    $(document).on("click", "#profile-image-user", function () {
        $("#profile-image").trigger("click");
    });

    $(document).on("change", "#profile-image", function () {
        var file = document.getElementById("profile-image").files[0];

        var formData = new FormData();

        formData.append("upload_image", file);

        $.ajax({
            url: "action_messenger.php",

            method: "post",

            data: formData,

            contentType: false,

            cache: false,

            processData: false,

            success: function (data) {
                alert(data);
            },
        });
    });
});