$(document).ready(function(){
    $("#filladdress").on("click", function(){
         if (this.checked) { 
                $("#Present_Address_Hno").val($("#Permanent_Address_Hno").val());
                $("#Present_Address_Sub_locality1").val($("#Permanent_Address_Sub_locality1").val());
                $("#Present_Address_Sub_locality2").val($("#Permanent_Address_Sub_locality2").val());                         
                $("#Present_Address_Location").val($("#Permanent_Address_Location").val());                         
                $("#Present_Address_Sub_District").val($("#Permanent_Address_Sub_District").val());                         
                $("#Present_Address_State").val($("#Permanent_Address_State").val());                         
                $("#Present_Address_pin_code").val($("#Permanent_Address_pin_code").val());                         
                $("#Present_Address_Country").val($("#Permanent_Address_Country").val());                         
                $("#Present_Address_Police_Station").val($("#Permanent_Address_Police_Station").val());                         
                $("#Present_Address_Post_office").val($("#Permanent_Address_Post_office").val());                                            
    }
    else {
        $("#Present_Address_Hno").val('');
        $("#Present_Address_Sub_locality1").val('');
        $("#Present_Address_Sub_locality2").val('');           
        $("#Present_Address_Location").val('');           
        $("#Present_Address_Sub_District").val('');           
        $("#Present_Address_State").val('');           
        $("#Present_Address_pin_code").val('');           
        $("#Present_Address_Country").val('');           
        $("#Present_Address_Police_Station").val('');           
        $("#Present_Address_Post_office").val('');           
      }
    });
});