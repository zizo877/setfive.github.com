<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="jquery-1.8.3.min.js"></script>
    <script src="d3.v3.min.js"></script>
    <script src="underscore-min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.color-2.1.1.min.js"></script>
    <title>Welcoming the Startup Institute: Boston class of Spring '13</title>
    
  </head>

  <body>

    <a target="_blank" href="https://github.com/Setfive/setfive.github.com/tree/master/d3_startup_school"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>
  
    <div class="header">
        <div class="pull-left">
            <a href="http://www.setfive.com" target="_blank"><img src="logo_website_no_consulting.png" /></a>
        </div>
        <div class="pull-right">
            <div class="header-menubar">
                <a href="mailto:contact@setfive.com">contact@setfive.com</a>
                |
                <a href="http://www.twitter.com/setfive.com">@setfive</a>
                |
                <a href="tel:6178630440">617.863.0440</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="container padded-bottom">
        <div class="row">
            <div class="span12 centered">
                <h2>Welcoming the Startup Institute: Boston class of Spring '13</h2>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="alert alert-info centered">
                    We're excited to meet everyone but in the meantime we thought it would be fun to put together a visualization of your class. 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="stats-line">
                    <em class="highlight">Eight</em> members of the class have a first name that starts with "J" and <em class="highlight">two</em> have a first name that starts with "Z". 
                    <em class="highlight">Two</em> last names that start with "Z" and <em class="highlight">one</em> with "Q". On resumes, @gmail.com appeared <em class="highlight">thirty six</em> times, by far the most popular domain.
                    <em class="highlight">Thirteen</em> of you are in the dev track, <em class="highlight">seventeen</em> in marketing, <em class="highlight">ten</em> in product, and <em class="highlight">thirteen</em> in sales.                         
                </div>
            </div>
        </div>
    </div>
    
    <div class="container padded-bottom">
    
        <div class="row">
            <div class="span12">
                <div class="page-header">
                    <h3>Visualizing the class</h3>                   
                </div>  
            </div>
        </div>
    
        <div class="row">
        
            <div class="span6 inthe-squares centered">
                <h3>What's in the squares?</h3>
                <table class="table table-bordered table-striped table-condensed">
                    <tbody>
                        <tr>
                            <td>
                                <a href="#" title="First Name Letter" data-content="Gradient based on the first letter of first name. (A = 0, Z = 100)" rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                            
                            <td>
                                <a href="#" title="First Name Length" data-content="Gradient based on the length of the first name. (A = 0, Z = 100)" rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                            
                            <td>
                                <a href="#" title="First Name Metaphone" data-content="A color based on the metaphone of the first name." rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" title="Last Name Letter" data-content="Gradient based on the last letter of first name. (A = 0, Z = 100)" rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                            
                            <td>
                                <a href="#" title="Last Name Length" data-content="Gradient based on the length of the last name. (A = 0, Z = 100)" rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                            
                            <td>
                                <a href="#" title="Last Name Metaphone" data-content="A color based on the metaphone of the last name." rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" title="Track" data-content="Starup school track." rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                            
                            <td>
                                <a href="#" title="Email Username" data-content="Color based on the email username." rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                            
                            <td>
                                <a href="#" title="Email Domain" data-content="Color based on the email domain name." rel="tooltip" class="btn"><i class="icon-question-sign"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p><strong>Note:</strong> Click the question marks for info!</p>
            </div>
        
            <div class="span6">
                <p>Each 3x3 grid below represents a member of the class. The top two rows represent the student's first and last names.  
                In the <strong>first row</strong>, the left column represents the first letter of the first name, 
                the middle column represents the length of the first name, and the right column is a HSL mapping for a <a href="http://www.php.net/manual/en/function.metaphone.php" target="_blank">metaphone</a> of the first name.
                The <strong>second row</strong> is identical to the first except mapping the last name.
                In the <strong>last row</strong>, the first column represents the track the student is in
                and then the middle left and middle right squares are a HSL representation of the <a href="http://www.php.net/manual/en/function.metaphone.php" target="_blank">metaphone</a> 
                of the student's email user name and domain name (john.doe, gmail.com).                        
            </div>
        </div>
        
        <div class="row">
            <div class="span6">
            
                <ul class="listless inline">
                    <li><strong>Filter: </strong></li>
                    <li><a href="#" class="sales filter-on" data-provide="filter" data-val="sales">Sales</a></li>
                    <li><a href="#" class="prod filter-on" data-provide="filter" data-val="prod">Product</a></li>
                    <li><a href="#" class="marketing filter-on" data-provide="filter" data-val="mrkt">Marketing</a></li>
                    <li><a href="#" class="dev filter-on" data-provide="filter" data-val="dev">Development</a></li>
                </ul>                                
                <ul class="listless inline">
                    <li><strong>Sort By:</strong></li>
                    <li><a class="selected" href="#" data-provide="sort" data-sort="fname_text">First Name</a></li>
                    <li><a href="#" data-provide="sort" data-sort="lname_text">Last Name</a></li>
                    <li><a href="#" data-provide="sort" data-sort="track">Track</a></li>
                </ul> 
            
            </div>
            <div class="span6">
                <form id="filterSquares" class="form-inline">                    
                    <strong>Find Yours: </strong>                    
                    <input id="email" type="text" placeholder="Enter your email address..." />
                    <div class="btn-group">
                        <input type="reset" value="Clear" class="btn" />
                        <input type="submit" value="Search" class="btn btn-primary" />
                    </div>                    
                </form>
            </div>
        </div>
        
    </div>
    
    <div class="container">
        <div class="row">
            <div class="span12">
                <div id="svg"></div>
            </div>
        </div>
    </div>
    
    <div class="container padded-bottom">
        <div class="row">
            <div class="span12">
    			<div class="alert alert-info centered follow-us-bottom">
				Dig the visualization? We'd love if you followed us  
				<iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.1362636220.html#_=1362664812230&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=setfive&amp;show_count=false&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button twitter-follow-button" style="width: 109px; height: 20px;" title="Twitter Follow Button" data-twttr-rendered="true"></iframe>		 
				</div>
			</div>
		</div>
	</div>
    
    <script>

    var svg;
    var innerSvg;
    
    var cellSize = 30;
	var cellBuffer = 32;
	var cubeSize = (cellBuffer * 1.15) * 3;
    var cubesPerRow = 8;
    
    $(document).ready(function(){

        $(".inthe-squares a").click(function(){
            return false;
        });

                
        $("[rel='tooltip']").popover({trigger: "manual"});

        $("[rel='tooltip']").click(function(){
            var me = $(this);         
            $(this).popover("toggle");
            
            $(".popover:visible").each(function(){
                if( !$(this).prev("a:first").is(me) ){
                    $(this).prev("a:first").popover("hide");
                } 
            });
            
            return false;
        });
        
        $("#filterSquares").submit(function(){
            var email = $(this).find("#email").val();
            getData("fname_text", email);
            return false;
        });

        $("#filterSquares").bind("reset", function(){
            getData( $("[data-provide='sort']").filter(".selected").data("sort") );
        });
        
        getData("fname_text");

        $("[data-provide='sort']").click(function(){
            $("[data-provide='sort']").removeClass("selected");
            $(this).addClass("selected");
                        
            getData( $(this).data("sort") );
            return false;
        });

        $("[data-provide='filter']").click(function(){
			if( $(this).hasClass("filter-on") ){
				$(this).removeClass("filter-on");
			}else{
				$(this).addClass("filter-on");
			}

			getData( $("[data-provide='sort']").filter(".selected").data("sort") );
        	return false;
        });
        
    });

    function getData(sortBy, filterEmail){

    	$("#svg *").remove();
    	
        svg = d3.select("#svg").append("svg")
			.attr("class", "chart")
			.attr("width", 930)
			.attr("height", 900)
		  .append("g");   

        var filters = [ ];
        $("[data-provide='filter']").filter(".filter-on").each(function(){
			filters.push( $(this).data("val") );
        });
    	
        $.getJSON("data.php", {sortBy: sortBy, filters: filters, filterEmail: filterEmail}, function(data){

            /*
                [
                     [
                          {"h":0,"s":0.44311377245509,"l":0.38235294117647},
                          {"h":170.74390243902,"s":0.65560165975104,"l":0.65271966527197}
                     ],
                     [
                          {"h":168.68674698795,"s":0.94610778443114,"l":0.83529411764706},
                          {"h":170.74390243902,"s":0.67219917012448,"l":0.61924686192469}
                     ],
                     [{"h":0,"s":0.9940119760479,"l":0.84117647058824},{"h":0,"s":0.31535269709544,"l":0.30125523012552}]
                     
                ]
            
            */
            
            svg.selectAll('g').data(data).exit().remove();
            
            rowSvg = svg.selectAll('g').data(data).enter().append('g').attr("class", "svg-row");
            
            rowSvg.each(function(el, userIndex){
                
				var rowInnerSVG = d3.select(this)
								    .selectAll("g")
								      .data(el)
								      .enter()
								    .append("g");
				
				rowInnerSVG.each(function(ex, step){
					
					var rects = d3.select(this)
								    .selectAll("rect")
								    .data(ex);

					function setSquareCords( square ){
						
					    square.attr('x', function(val, index){
					            var rowMultiplier = userIndex % cubesPerRow;             
				                return (cubeSize * rowMultiplier) + (index * cellBuffer);
				              })
			                  .attr('y', function(val, index){
			                    var rowOffset = userIndex >= cubesPerRow ? Math.floor(userIndex / cubesPerRow) * cubeSize : 0;						               
				                return rowOffset + (step * cellBuffer);
			                  })
			                  .attr('width', cellSize)
			                  .attr('height', cellSize)
			                  .attr('fill', function(obj, index){
				                 return jQuery.Color( {hue: obj.h, saturation: obj.s, lightness: obj.l, alpha: 1} ).toHslaString();
				              })					    
					}

					rects.transition().duration(750).call(setSquareCords);
				    rects.enter().append("rect").call(setSquareCords);				    
				    rects.exit().remove();
		            
				});
								      
            });
			
        });

    }
    
    </script>
    
   </body>
</html>