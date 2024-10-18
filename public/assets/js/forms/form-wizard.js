var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit",
    },
    onStepChanging: function (event, currentIndex, newIndex) {
        return (
            currentIndex > newIndex ||
            (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                (currentIndex < newIndex &&
                    (form.find(".body:eq(" + newIndex + ") label.error").remove(),
                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                    (form.validate().settings.ignore = ":disabled,:hidden"),
                    form.valid()))
        );
    },
    onFinishing: function (event, currentIndex) {
        if (currentIndex === 4) { // 5th step is the last step
            return (form.validate().settings.ignore = ":disabled"), form.valid();
        }
    },
    onFinished: function (event, currentIndex) {
        // You can also submit the form here
        if (currentIndex === 4) { // 5th step is the last step
            $("#current_step").val(4);
            // Final submission if needed, this could be a different endpoint
            $.ajax({
                url: form.attr('action'), // Use the form's action for final submission
                method: 'POST',
                data: form.serialize(), // Serialize all form data
                success: function(response) {
                    swal.fire({
                        title: "Form Submitted!",
                        text: "Campaign Created Successfully!",
                        icon: "success", // Set the icon to success
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload(); // Refresh the page on confirmation
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error in final submission:', error);
                    swal.fire({
                        title: "Error!",
                        text: "There was an error submitting the form.",
                        icon: "error",
                    });
                }
            });
        }
    },
});

        swal(
            "Form Submitted!",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
        );
    },
}),
    $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        rules: {
            email: {
                email: !0,
            },
        },
    });
