// JavaScript Document

$(function() {
        $( "#slider-range" ).slider({
            range: true,
			step:1,
            min: 100000,
            max: 20000000,
            values: [ 100000, 20000000 ],
            slide: function( event, ui ) {
                
                var offset1 = $(this).children('.ui-slider-handle').first().offset();
                var offset2 = $(this).children('.ui-slider-handle').last().offset();
                $(".tooltip1").css('top',offset1.top).css('left',offset1.left).show();
   $(".tooltip2").css('top',offset2.top).css('left',offset2.left).show();
                         
                
                $('#min').val(ui.values[ 0 ]);
                $('#max').val(ui.values[ 1 ]);
                
            },
            stop:function(event,ui){
                $(".tooltip").hide();
            }
        });
    
    $('#min').change(function(){
        $( "#slider-range" ).slider( "values", 0, $('#min').val()  );
    });
    $('#max').change(function(){
        $( "#slider-range" ).slider( "values", 1, $('#max').val()  );
    });
        
    });
	
	
	$(function() {
        $( "#slider-range2" ).slider({
            range: true,
			step:1,
            min: 12,
            max: 24,
            values: [ 12, 24 ],
            slide: function( event, ui ) {
                
                var offset1 = $(this).children('.ui-slider-handle').first().offset();
                var offset2 = $(this).children('.ui-slider-handle').last().offset();
                $(".tooltip1").css('top',offset1.top).css('left',offset1.left).show();
   $(".tooltip2").css('top',offset2.top).css('left',offset2.left).show();
                         
                
                $('#min2').val(ui.values[ 0 ]);
                $('#max2').val(ui.values[ 1 ]);
                
            },
            stop:function(event,ui){
                $(".tooltip").hide();
            }
        });
    
    $('#min2').change(function(){
        $( "#slider-range2" ).slider( "values", 0, $('#min2').val()  );
    });
    $('#max2').change(function(){
        $( "#slider-range2" ).slider( "values", 1, $('#max2').val()  );
    });
        
    });