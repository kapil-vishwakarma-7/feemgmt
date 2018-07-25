var Script = function () {

    $.validator.setDefaults({
        submitHandler: function() { alert("submitted!"); }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#feedback_form").validate();

        // validate signup form on keyup and submit
        $("#admission_form").validate({

            rules: {
                fullname: {
                    required: true,
                },
                address: {
                    required: true,
                    minlength: 10
                },
                stdmob: {
                    required: true,
                    minlength: 10
                },
                gdcontact: {
                    
                    minlength: 5
                },
                gdname: {
                    required: true,
                    minlength: 5
                },
                mname: {
                    required: true,
                    minlength: 5
                },
                courses: {
                    required: true,
                
                },
               
                email: {
                   
                    email: true
                },
                dob: {
                    required: true,
                    
                },
                aadhar:{
required:true,
minlength:12
                },
                medium:{
required:true,
                },
                exams:{
required:true,
                },
                subject:{
required:true,
                },
                marks:{
required:true,
                },
                board:{
required:true,
                },
                caste:{
                    required:true,
                },
                category:{
required:true,
                },
                year:{
required:true,
                },
            },
            messages: {                
                fullname: {
                    required: "Please enter a Full Name.",
                    minlength: "Your Full Name must consist of at least 6 characters long."
                },
                address: {
                    required: "Please enter a Address.",
                    minlength: "Your Address must consist of at least 10 characters long."
                },
                courses:{
                 required:"Please Select Courses.",
                },
                stdmob: {
                    required: "Please enter a Contact Number.",
                    minlength: "Your Contact must be 10 digit long."
                },
                gdcontact: {
                    
                    minlength: "Your Contact must be 10 digit long."
                },
               gdname: {
                    minlength:"Contact must be 10 digit",
                    
                },
                gender: {
                    required:"Please select gender",
                    
                },
                mname: {
                    required: "Please enter mother's name",
                    
                },
                 dob: {
                    required: "Please enter Dob",
                    
                },
                medium: {
                    required: "Please select medium",
                    
                },
                exams: {
                    required: "Please enter exam detail",
                    
                },
                category:{
required:"select category",
                },
                year: {
                    required: "Please enter passing year",
                    
                },
                board: {
                    required: "Please enter board",
                    
                },
                aadhar: {
                    required: "Enter aadhar number.",
                    minlength: "aadhar must be 12 digit.",
                    
                },
                email: "Please enter a valid email address.",
                
            }
        });

        

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });


}();