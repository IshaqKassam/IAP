$(document).ready(function(){
    $('#order-submit-btn').click(function(event){
        event.preventDefault();

        var name_of_food = $('#food-name').val();
        var no_of_units = $('#no-of-units').val();

        alert("this feature is coming soon");
        return;
        
        $.ajax({
            url: "api.foodapi.com/order",
            type: "post",
            header:{
                "api-key" : "sdfvertgt58768" 
            },
            data:{
                "name_of_food": name_of_food,
                "no_of_units": no_of_units
            },
            success: function (data){
                //process the data
            },
            error: function(error){
                alert("an error occurred");
            }
        });
    });
});