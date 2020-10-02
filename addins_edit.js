$(function() {
    var selected_addins = $("#milk_1_selection").children("option:selected").val();
    switch (selected_addins) {
              case 'Extra_1':
                var addins_option_selected = "Extra Splash of 1% Milk";
                break;
              case 'Light_1':
                addins_option_selected = "Light Splash of 1% Milk";
                break;
              case 'Splash_1':
                 addins_option_selected = "Splash of 1% Milk";
                break;
            }
        document.getElementById("addins_value_value").setAttribute("value", addins_option_selected);
        document.getElementById("addins_value").innerHTML = addins_option_selected;
    
    $("#addins").click(function(){
       $('#addins_edit_wrapper').show();
    });

    $('#submit_form').click(function(){
        $('#addins_edit_wrapper').hide();
        
        var selected_addins = $("#milk_1_selection").children("option:selected").val();
        switch (selected_addins) {
              case 'Extra_1':
                var addins_option_selected = "Extra Splash of 1% Milk";
                break;
              case 'Light_1':
                addins_option_selected = "Light Splash of 1% Milk";
                break;
              case 'Splash_1':
                 addins_option_selected = "Splash of 1% Milk";
                break;
            };
        document.getElementById("addins_value_value").setAttribute("value",addins_option_selected);
        document.getElementById("addins_value").innerHTML = addins_option_selected;
            
        
    
    });
});