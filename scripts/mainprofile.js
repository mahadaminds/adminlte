$(function () {
    //login submit
    $("#createprofile").on('click',function(e){
       e.preventDefault();

       var id = $("#id").val();
        var cust_id = $("#cust_id").val();
        var email=$("#email").val();
        var age = $("#age").val();
        var height = $("#height").val();
        var religion = $("#religion").val();
        var caste = $("#caste").val();
        var subcaste = $("#subcaste").val();
        var district = $("#district").val();
        var state = $("#state").val();
        var country = $("#country").val();
        var ms = $("#ms").val();

       // var password = $("#loginPassword").val();
  
        var dataParam={"id":id,"cust_id":cust_id,"email":email,
        "age":age,"height":height,"religion":religion,"caste":caste,"subcaste":subcaste,
        "district":district,"state":state,"country":country,"ms":ms};
        console.log(dataParam);
        $.ajax({
            type:'post',
            url:'createprofile.php',
            data:dataParam,
            dataType: "json",
            cache: false,
            success:function(response){
              var jsonData = JSON.parse(JSON.stringify(response));
              console.log(jsonData);
               // user is logged in successfully in the back-end
               // let's redirect
               if (jsonData.success == true)
               {
                   location.href = 'createprofile.php';
               }
            },
            error: function (exception) {
              console.log(exception);
              $("#profileerror").text('profile should not create');
              return false;
            }
        });
    });
  
    //navbar
  
  
    //sidebar
  
  });