$(document).ready(function()
{
    //add post section
    $(".add").click(function(){
        $(".addpost").toggle();
        });
    //add post section
    
    //comments movement
    $(".comnt").click(function(){
        $(".lin").toggle();
        });
    
     $(".comnt1").click(function(){
        $(".lin1").toggle();
        });
    //comments movement
    

    // add active class to the first item in carousel
    $(".carousel-item:first-child").addClass("active");
});  