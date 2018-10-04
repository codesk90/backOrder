$(".submit").click(function(){
    var styleNumber =  $(".style_number").val();
    var customerName =  $(".customer_name").val();
    var phoneNumber =  $(".phone_number").val();
    var email =  $(".email").val();

    $.ajax({
        url: "./database/api.php",
        type: "POST",
        async: false,
        data: {
            "done": 1,
            "style_number": styleNumber,
            "customer_name": customerName,
            "phone_number": phoneNumber,
            "email": email,
        },
        success: function(data){
            location.reload();
        }
    });
});

$(".getSubmit").click(function(){
     
     var styleId = $(".styleNumber").val();

     $.ajax({
        url: "./database/api.php",
        type: "POST",
        data: {
            "display": 1,
            "style_number": styleId
        },
        success:function(data){
            $(".display").html(data);
        }
     });
});