$(document).ready(function(){


    $(document).on('change', '[name="photo"]', function(e){

    let ext = $(e.target).val().split('.').pop().toLowerCase(),
        error = false

    if($.inArray(ext, ['png', 'jpg','jpeg']) == -1)
    {
        $(this).val("")
        $(this).parent().parent().append(`<small class="error">Only image file (.png, .jpg, .jpeg) can be uploaded</small>`)
        error = true
    }

    else if(this.files[0].size)
    {
        let filesize = this.files[0].size / 1024
        if(filesize > 1000)
        {
            $(this).val("")
            $(this).parent().parent().append(`<small class="error">Photo must not exceed 1MB</small>`)
            error = true
        }
        else if(!error)
        {
            showPhoto($(this))
        }
    }
    });

    function showPhoto(photo){

        let file = photo.get(0).files[0];

        if(file){

            let reader = new FileReader();

            reader.onload = function(){
                $("#photo-frame").find("img").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }

    $('.nav-link').attr('disabled', true);

    $('#employeeForm').validate({
        ignore: [],
        rules:{
            firstname: "required",
            lastname: "required",
            photo: "required",
            email_address:{
                required: true,
                email: true
            },
            birthdate: 'required',
            telephone_no: {
                required: true,
                maxlength: 10,
            },
            hometown: 'required',
            birth_place: 'required',
            ssnit_number: 'required',
            convid19_card_number: 'required',
            ghana_card_number: {
                required: true,
                ghanaCard: true
            }

        },
        messages: {
            firstname: "Please enter employee first name",
            lastname: "Please enter employee last name",
            photo: "Please upload employee photo",
            ememail_address: {
                required: "Please enter employee email address",
                email: 'Please enter a valid email address'
            },
            birthdate: "Please enter employee date of birth",
            telephone_no: {
                required: "Please enter employee phone number",
                maxlength: "Phone number should be 10 digits"
            },
            hometown: "Please enter employee hometown",
            birth_place: "Please enter employee birth place",
            ssnit_number: "Please enter employee SSNIT number",
            convid19_card_number: "Please enter employee COVID-19 card number",
            ghana_card_number: {
               required: "Please enter employee Ghana Card Number",
            }
        }
    });

    $(".next").click(function(){
        $(this).closest("#employeeForm").find('input').not("input#other_name", function(){
            if($(this).hasClass('error')){
                $(this).addClass('is-invalid')
            }
        })
    });
    $("input#customFile").on("change", function(){
        $(this).siblings(".error").fadeOut("fast");
        $(this).parent().parent().find("small").remove();
    })
    // Validate Ghana Card Number
    jQuery.validator.addMethod("ghanaCard",
        function(value, element){
            return this.optional(element) || /^GHA\-\d{9}\-\d$/.test(value);
    },
    "Ghana Card format is invalid (e.g. GHA-000000000-0)")
})
