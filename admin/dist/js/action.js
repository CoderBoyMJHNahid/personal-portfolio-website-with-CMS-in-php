$(document).ready(function(){

    // hero section code
    $("#hero_section_from").on("submit",function(e){
        e.preventDefault();
        
        var formdata = new FormData(this);
        
        $.ajax({
            url: "./includes/hero_section_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                // console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "hero-section.php";
                    },2000)

                } else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-danger").html("");
                        
                    },2000)
                }
            }
        });

        

    })

    // who am i code
    $("#who_am_form_wrapper").on("submit",function(e){
        e.preventDefault();
    
        var introduction = $("#summernote").val();
        

        var formdata = new FormData(this);

        if (introduction != "") {
            
            $.ajax({
                url: "./includes/who_am_i_cor.php",
                type: "POST",
                dataType:"JSON",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (response) {
                    // console.log(response);
                    if (response.hasOwnProperty("success")) {
                        
                        $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                        setTimeout(function(){
                            $(".alert_wrapper .alert").removeClass("alert-success").html("");
                            window.location = "who-am-i.php";
                        },2000)
    
                    } else {
                        $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                        setTimeout(function(){
                            $(".alert_wrapper .alert").removeClass("alert-danger").html("");
                            
                        },2000)
                    }
                }
            });
        } else {
            
        $(".alert_wrapper .alert").addClass("alert-danger").html("<p>You have to must write description. Please do it!</p>");
        setTimeout(function(){
            $(".alert_wrapper .alert").removeClass("alert-danger").html("");
            
        },5000)

        }

    });

    // Services Skill code
    $("#add_service_skill_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/who_i_do_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                // console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "what-i-do.php";
                    },2000)

                } else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-danger").html("");
                        
                    },2000)
                }
            }
        }); 

    });

    // Services Skill code
    $("#add_service_box_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/service_box_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "what-i-do.php";
                    },2000)

                } else if(response.hasOwnProperty("type_error")){
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Please Choose only png image..</p>");
                    
                }else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    
                }
            }
        }); 

    });

    // portfolio category code
    $("#portfolio_category_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/portfolio_cat_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "protfolio-category.php";
                    },2000)

                }else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    
                }
            }
        }); 

    });

    // portfolio category code
    $("#portfolio_image_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/portfolio_image_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "portfolio-image.php";
                    },2000)

                }else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    
                }
            }
        }); 

    });

    // client reviews code
    $("#client_reviews_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/client_reviews_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "clients.php";
                    },2000)

                }else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    
                }
            }
        }); 

    });

    // client say code
    $("#client_say_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/client_say_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "client-say.php";
                    },2000)

                }else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    
                }
            }
        }); 

    });

    // footer data code
    $("#footer_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/footer_data_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "footer_content.php";
                    },2000)

                }else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    
                }
            }
        }); 

    });

    // Setting data code
    $("#setting_form").on("submit",function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);

        $.ajax({
            url: "./includes/setting_form_cor.php",
            type: "POST",
            dataType:"JSON",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty("success")) {
                    
                    $(".alert_wrapper .alert").addClass("alert-success").html("<p>Your data has been updated!!</p>");
                    setTimeout(function(){
                        $(".alert_wrapper .alert").removeClass("alert-success").html("");
                        window.location = "setting.php";
                    },2000)

                }else {
                    $(".alert_wrapper .alert").addClass("alert-danger").html("<p>Something is wrong. Please Try again</p>");
                    
                }
            }
        }); 

    });





});