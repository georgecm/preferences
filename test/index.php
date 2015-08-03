<!DOCTYPE html>
<html>
<head>
    <title>Website Preferences</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
   <div class="step1 step">
    <h1>Website Preferences</h1>
    <h2>Our way of making the web a better place</h2>
    <div class="start_panel">
    <form>
        <div class="row">
            <label>Full Name</label>
            <input type="text" id="full_name" placeholder="George Mavrommatis"/>
        </div>
        <div class="row">
            <label>Age range</label>
            <select id="age">
                <option value="18-24">18-24</option>
                <option value="25-34">25-34</option>
                <option value="35-44">35-44</option>
                <option value="45-54">45-54</option>
                <option value="55-64">55-64</option>
                <option value="65+">65+</option>
            </select>
        </div>
        <div class="row">
            <label>Nationality</label>
            <select id="nation">
                <option value="greek">Greek</option>
            </select>
        </div>
        <div class="row">
            <label>Level of education</label>
            <select id="education">
                <option value="schoole">School</option>
                <option value="high_school">High School</option>
                <option value="university">University</option>
                <option value="masters">Masters</option>
                <option value="phd">PHD</option>
                <option value="higher">Higher</option>
            </select>
        </div>
        <div class="row">
            <label>Email</label>
            <input type="email" id="email" placeholder="george@george.com"/>
        </div>
        <input type="submit" id="start" value="Start the test"/>
    </form>
    </div>
   </div>
   <div class="step2 step">
    <h2>Which one you prefer?</h2>
    <section class="vs">
        <article class="left panel test">
        </article>
        <div class="or"></div>
        <article class="right panel test"></article>        
    </section>
   </div>
   
<script>
$(document).ready( function() {
    
    var user_id = "";
    
    function update_user_id(id) {
    	user_id = id;
    }
    
    function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};
    
    $('#start').click(function(e) {
        
    	e.preventDefault();
    	var full_name = $('#full_name').val();
    	var age = $('#age').val();
    	var nation = $('#nation').val();
    	var education = $('#education').val();
    	var email = $('#email').val();
        
        if( !isValidEmailAddress( email ) )
            $('#email').addClass('problem');
        else 
            $('#email').removeClass('problem');

        if( full_name.length <= 3 )
            $('#full_name').addClass('problem');
        else 
            $('#full_name').removeClass('problem');
            
        if( $('.problem').size() == 0 )
        {
            $.ajax({
                url: "start.php",
                method: "POST",
                data: {
                    full_name: full_name,
                    age: age,
                    nation: nation,
                    education: education,
                    email: email
                }
            }).done( function(data) {
                update_user_id(data);
                if( $.isNumeric( data ) )    
	                showStep(2);
                else
                    alert("There is a problem with the system. Please try again later.");
            });
        }
            
    });
    
    window['path120'] = 3;
    window['path121'] = 5;
    
    window['path220'] = 2;
    window['path221'] = 3;

    window['path310'] = 1;
    window['path311'] = 2;
    window['path320'] = 3;
    window['path321'] = 4;
    
    window['path240'] = 5;
    window['path241'] = 6;
    
    window['path340'] = 4;
    window['path341'] = 5;
    window['path350'] = 6;
    window['path351'] = 7;
    
    var level = 1;
    
    var symmetry = [
        {'id':1, 'img_url':'../design/symmetry/symmetry1.jpg'},
        {'id':2, 'img_url':'../design/symmetry/symmetry2.jpg'},
        {'id':3, 'img_url':'../design/symmetry/symmetry3.jpg'},
        {'id':4, 'img_url':'../design/symmetry/symmetry4.jpg'},
        {'id':5, 'img_url':'../design/symmetry/symmetry5.jpg'},
        {'id':6, 'img_url':'../design/symmetry/symmetry6.jpg'},
        {'id':7, 'img_url':'../design/symmetry/symmetry7.jpg'},
    ];
        
	var depth = [
        {'id':1, 'img_url':'../design/depth/1.jpg'},
        {'id':2, 'img_url':'../design/depth/2.jpg'},
        {'id':3, 'img_url':'../design/depth/3.jpg'},
        {'id':4, 'img_url':'../design/depth/4.jpg'},
        {'id':5, 'img_url':'../design/depth/5.jpg'},
        {'id':6, 'img_url':'../design/depth/6.jpg'},
        {'id':7, 'img_url':'../design/depth/7.jpg'},
    ];
    
    var contrast = [
        {'id':1, 'img_url':'../design/contrast/contrast-1.jpg'},
        {'id':2, 'img_url':'../design/contrast/contrast-2.jpg'},
        {'id':3, 'img_url':'../design/contrast/contrast-3.jpg'},
        {'id':4, 'img_url':'../design/contrast/contrast-4.jpg'},
        {'id':5, 'img_url':'../design/contrast/contrast-5.jpg'},
        {'id':6, 'img_url':'../design/contrast/contrast-6.jpg'},
        {'id':7, 'img_url':'../design/contrast/contrast-7.jpg'},
    ];
        
	var simplicity = [
        {'id':1, 'img_url':'../design/simplicity/simplicity-1.jpg'},
        {'id':2, 'img_url':'../design/simplicity/simplicity-2.jpg'},
        {'id':3, 'img_url':'../design/simplicity/simplicity-3.jpg'},
        {'id':4, 'img_url':'../design/simplicity/simplicity-4.jpg'},
        {'id':5, 'img_url':'../design/simplicity/simplicity-5.jpg'},
        {'id':6, 'img_url':'../design/simplicity/simplicity-6.jpg'},
        {'id':7, 'img_url':'../design/simplicity/simplicity-7.jpg'},
    ];
    
    var ctype = [
        {'id':1, 'img_url':'../design/type/content-1.jpg'},
        {'id':2, 'img_url':'../design/type/content-2.jpg'},
        {'id':3, 'img_url':'../design/type/content-3.jpg'},
        {'id':4, 'img_url':'../design/type/content-4.jpg'},
        {'id':5, 'img_url':'../design/type/content-5.jpg'},
        {'id':6, 'img_url':'../design/type/content-6.jpg'},
        {'id':7, 'img_url':'../design/type/content-7.jpg'},
    ];

	var brightness = [
        {'id':1, 'img_url':'../design/brightness/brightness-1.jpg'},
        {'id':2, 'img_url':'../design/brightness/brightness-2.jpg'},
        {'id':3, 'img_url':'../design/brightness/brightness-3.jpg'},
        {'id':4, 'img_url':'../design/brightness/brightness-4.jpg'},
        {'id':5, 'img_url':'../design/brightness/brightness-5.jpg'},
        {'id':6, 'img_url':'../design/brightness/brightness-6.jpg'},
        {'id':7, 'img_url':'../design/brightness/brightness-7.jpg'},
    ];
    var color = [
        {'id':1, 'img_url':'../design/color/color-1.jpg'},
        {'id':2, 'img_url':'../design/color/color-2.jpg'},
        {'id':3, 'img_url':'../design/color/color-3.jpg'},
        {'id':4, 'img_url':'../design/color/color-4.jpg'},
        {'id':5, 'img_url':'../design/color/color-5.jpg'},
        {'id':6, 'img_url':'../design/color/color-6.jpg'},
        {'id':7, 'img_url':'../design/color/color-7.jpg'},
    ];
        
        
   	var step = [];
    step[1] = 'symmetry';
    step[2] = 'color';
    step[3] = 'depth';
    step[4] = 'brightness';
    step[5] = 'contrast';
    step[6] = 'ctype';
    step[7] = 'simplicity';
    
    var levels = [];
    levels[1] = [];
    levels[2] = [];
    levels[3] = [];
        
    
    var my_style = {};
        
    function runTimer($step) {
        $step.find("iframe").ready(function (){
    	setTimeout(
          function() 
          {
            $step.find('.panel').addClass('done');
          }, 500);
                    
        });
    }
    
    function updateDB() {
    	$.ajax({
        	url: "update.php",
        	method: "POST",
        	data: {
                user: user_id,
        		level1: JSON.stringify(levels[1]),
                level2: JSON.stringify(levels[2]),
                level3: JSON.stringify(levels[3])
        	}
        }).done( function(data) {
        	//alert(data);
        });
	}
        
    
    function runVS(run, down, up) {
        
        if( level <= 3 )
        {
        type = step[run];
        
        if( typeof down == 'undefined') 
        	down = 2;
        else
        	down = down - 1;
        if( typeof up == 'undefined') 
        	up = 4;
        else
        	up = up - 1;
    
        var $left = $('.panel.left');
        var $right = $('.panel.right');
    
    	if( type == 'symmetry' )
        {
            $left.html('<img src="'+symmetry[down].img_url+'" />');
            $right.html('<img src="'+symmetry[up].img_url+'" />');
		}
    	else if ( type == 'contrast' )
        {
            $left.html('<img src="'+contrast[down].img_url+'" />');
            $right.html('<img src="'+contrast[up].img_url+'" />');
		}
    	else if ( type == 'depth' ) {
            $left.html('<img src="'+depth[down].img_url+'" />');
            $right.html('<img src="'+depth[up].img_url+'" />');
		}
    	else if ( type == 'color' ) {
            $left.html('<img src="'+color[down].img_url+'" />');
            $right.html('<img src="'+color[up].img_url+'" />');
		}
    	else if ( type == 'brightness' ) {
            $left.html('<img src="'+brightness[down].img_url+'" />');
            $right.html('<img src="'+brightness[up].img_url+'" />');
		}
    	else if ( type == 'ctype' ) {
            $left.html('<img src="'+ctype[down].img_url+'" />');
            $right.html('<img src="'+ctype[up].img_url+'" />');
		}
    	else if ( type == 'simplicity' ) {
            $left.html('<img src="'+simplicity[down].img_url+'" />');
            $right.html('<img src="'+simplicity[up].img_url+'" />');
		}
    
        function next() {
            if( run == 7 )
                {
                    level = level + 1;
                    run = 0;
                    console.log(levels[level-1]);
                }

                if( level == 1 )
                    runVS(run+1, 3, 5)
                else
                {
                    var prev;
                    $.each( levels[level-1], function(k, v) {
                        if( v.type == type )
                            prev = v.value;
                    });
                    prev = prev - 1;
                    var next_left = window['path'+level+prev+'0'];
                    var next_right = window['path'+level+prev+'1'];
                    //alert(run+' '+next_left+' '+next_right);
                    runVS(run+1, next_left, next_right);
                }
        }
            
    		$left.click( function() {  
                $left.off('click');
                $right.off('click');
                levels[level].push({'type':type,'value':down+1});
 	            next();
            });
            
    		$right.click( function() {                
                $left.off('click');
                $right.off('click');
                levels[level].push({'type':type,'value':up+1});
                next();
            });
    
    		
    	
		}
		else
		{
           //console.log(step); 
           //[{"type":"symmetry","value":4},{"type":"color","value":4},{"type":"depth","value":2},{"type":"brightness","value":4},{"type":"contrast","value":2},{"type":"ctype","value":5},{"type":"simplicity","value":3}]
           alert("finished "+JSON.stringify(levels[3]));
           updateDB();
		}
	}
    function showStep(step) {
    	$('.step').hide();
        var $current_step = $('.step.step'+step);
        $current_step.show();
        if(step == 2)
 	       runVS(1);
        //else if (step==3)
    }
    showStep(1);
    
	$(function() {
	    if(window.location.hash) {
            var hash = window.location.hash.substring(1);
            showStep(hash);
        }
    });
});
</script>
</body>
</html>