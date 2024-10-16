//Basic Example
$("#example-basic").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
});

// Basic Example with form
var form = $("#example-form");
form.validate({
    errorPlacement: function errorPlacement(error, element) {
        element.before(error);
    },
    rules: {
        confirm: {
            equalTo: "#password",
        },
    },
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex) {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex) {
        alert("Submitted!");
    },
});

// Advance Example

var form = $("#example-advanced-form").show();

form
    .steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) {
                return true;
            }
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            alert("Submitted!");
        },
    })
    .validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2",
            },
        },
    });

// Dynamic Manipulation
$("#example-manipulation").steps({
    headerTag: "h3",
    bodyTag: "section",
    enableAllSteps: true,
    enablePagination: false,
});

//Vertical Steps

$("#example-vertical").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
});

//Custom design form example
$(".tab-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit",
    },
    onFinished: function (event, currentIndex) {
        swal(
            "Form Submitted!",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
        );
    },
});

var form = $(".validation-wizard").show();

// Add a hidden input field to store the current step
form.append('<input type="hidden" name="current_step" id="current_step" value="0">');

// Flag to track if AJAX request is in progress
var isSubmitting = false;

$(".validation-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit",
    },
    onStepChanging: function (event, currentIndex, newIndex) {
        if (currentIndex > newIndex) {
            return true; // Allow going back
        }

        // Validate current step before moving to the next step
        if (currentIndex < newIndex) {
            // Remove previous error messages
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            form.validate().settings.ignore = ":disabled,:hidden";

            // Validate current step
            if (form.valid() && !isSubmitting) {
                // Set the current step value
                $("#current_step").val(newIndex);

                var stepData = form.serialize();
                                isSubmitting = true;

                $.ajax({
                    url: form.attr('action'), // Use the form's action (route)
                    method: 'POST',
                    data: stepData,
                    success: function(response) {
                        console.log('Step saved successfully:', response);
                        $(".validation-wizard").steps("next");
                    },
                    error: function(xhr, status, error) {
                        console.error('Error in saving step data:', error);
                        swal.fire({
                            title: "Error!",
                            text: "There was an error saving this step.",
                            icon: "error",
                        });
                    },
                    complete: function() {
                        isSubmitting = false;
                    }
                });

                return false; // Prevent moving to the next step until AJAX completes
            }
        }

        return true; // Allow going back
    },
    onFinishing: function (event, currentIndex) {
        if (currentIndex === 4) { // 5th step is the last step
            return (form.validate().settings.ignore = ":disabled"), form.valid();
        }
    },
    onFinished: function (event, currentIndex) {
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