$(function() {
    // $(document).ready(function(){ 
        var rotation = 0;
        $(document).on('click', ".rotate-right" , function() {
            rotation = (rotation -90) % 360;
            $(this).closest("div.col-md-3").find(".pic-view").css({'transform': 'rotate('+rotation+'deg)'});
            
            if(rotation != 0){
                $(this).closest("div.col-md-3").find(".pic-view").css({'width': '260px', 'height': '260px'});
            }else{
                $(this).closest("div.col-md-3").find(".pic-view").css({'width': '260px', 'height': '260px'});
            }
            $(this).closest("div.col-md-3").find('.rotation').val(rotation);
    
            //alert('check rotate right!');
        });
        
        $(document).on('click', ".rotate-left", function() {
            rotation = (rotation + 90) % 360;
    
    
    
            $(this).closest("div.col-md-3").find(".pic-view").css({'transform': 'rotate('+rotation+'deg)'});
            
            if(rotation != 0){
                $(this).closest("div.col-md-3").find(".pic-view").css({'width': '260px', 'height': '260px'});
            }else{
                $(this).closest("div.col-md-3").find(".pic-view").css({'width': '260px', 'height': '260px'});
            }
            $(this).closest("div.col-md-3").find('.rotation').val(rotation);
    
            //alert('check rotate left!');
        });
    
    
        $(document).on('click', ".btn-remove-photo", function(){
    
    
               $(this).closest("div.col-md-3").remove(); 
    
               
    
    
        });
    
    
    });