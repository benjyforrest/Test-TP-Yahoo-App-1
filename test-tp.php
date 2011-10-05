<style type="text/css">
	.outer-container{
		width:600px;
		margin:0 auto;
	}
	.inner-container{
		width:600px;
		height:400px;
		background-color:#f1f1f1;
		position:relative;
		text-align:center;
	}
	
	.buttons-container{
		position:absolute;
		bottom:30px;
		width:100%;
	}
	.ok{
		display:block;
		float:left;
		width:50px;
		margin-left:80px;
		background-color:#339933;
		font:bold 15px "trebuchet MS", arial, verdana;
		color:#fff;
		padding:3px 0;
	}
	.resend{
		display:block;
		float:right;
		margin-right:80px;
		font:bold 15px "trebuchet MS", arial, verdana;
		color:#fff;
		background-color:#006699;
		width:90px;
		padding:3px 0;
	}
	.message-container{
		width:400px;
		margin:0 auto;
		padding-top:30px;
		font:14px "trebuchet MS", arial, verdana;
		color:#666666;
		text-align:center;
	}
	
	.clsbtn{
	display:block;
		float:right;
	margin-right:80px;
		font:bold 15px "trebuchet MS", arial, verdana;
		color:#fff;
		background-color:#006699;
		
		padding:10px;
	
	}
	
	.tbbordclss{
	border:1px solid #339933;
	background:#ccc111;
	color:#ffffff;
	
	}
	
</style>
<div class="outer-container">
    	<div class="inner-container">

    		<div class="message-container" id="messcontainer">
            	<!--<table width="100%"><tr><td>Ok<td><td>Cancel</td></tr></table>-->
            	 </div>          	
            
            <div class="buttons-container">
            	<div class="ok">OK</div>
                <div class="resend" onclick="ttt()">RESEND</div>
                
            </div>
            <input id="tt" type="hidden" value="0" >
        </div>

        
    </div>
<!-- Create div tags for the main container and the tooltip 
<div id="tooltip" style="display:none;position:absolute;background-color:#000;color:#fff;padding:10px;"></div>
<div style="position:relative; margin:50px;">
  <div id="myContainer" style="position:absolute; top:50px; left:50px; border:1px solid #000; padding:10px; width:200px">SEND</div>&nbsp;
  <div id="myResendContainer" style="position:relative; top:50px; left:50px; border:1px solid #000; padding:10px; width:200px" onclick="ttt()">RESEND</div>
  <input id="tt" type="text" value="" >
</div>	
	
<div id="koko"></div>	
-->	
<script language="JavaScript" type="text/javascript">

window.setTimeout(test,15000);

 
  
  // Callback for mouseout
  function resetHandler(sender){
    // Hide the tooltip
    document.getElementById('tooltip').style.display = "none";
  }
  
  function test()
  {
  //alert("here: in test");
  	var myDiv = document.getElementById('messcontainer');
  	if(document.getElementById('tt').value != 1)
  	{
      		myDiv.innerHTML = '<h1>Log Out Iframe. Requires browser refresh</h1><iframe src="https://login.yahoo.com/config/login?logout=1" width="1px" height="1px"> </iframe>';
      	}
      
  }
  
  function ttt()
  {
  var myDiv = document.getElementById('messcontainer');
      myDiv.innerHTML = "<table width='100%' height='100px' class='tbbordclss'><tr><td> <h2>No action will be taken apart from removing popup</h2></td><tr><tr><td align='center'><div class='clsbtn' onclick='popu()'>Ok</div><div class='clsbtn' onclick='popu()'>Cancel</div></td></tr></table>";
      
      document.getElementById('tt').value = 1;
  
  }
  
  
  function popu() {
  var myDiv = document.getElementById('messcontainer');
  myDiv.innerHTML = "";
  
  }
</script>

