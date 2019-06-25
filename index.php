<html>
<style>
/* Tooltip container */
.tooltip {
    position: relative;
    /* display: inline-block;*/
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>


<head>
<meta id="test" http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>TravelSmart Registration</title>
</head>
 
<body bgcolor="#FFFFFF" link="#000080" vlink="#008080" alink="#000080">
<p align="center"><big><font color="#004080" face="Arial Rounded MT Bold"><em>
TravelSmart Registration</em></font></big></p>
<div align="center"><center>
 
<table border="0" width="300%" cellpadding="2">
  <tr>
    <td width="100%"><font face="Arial"></font></td>
  </tr>
 <form action="http://evdla225.delta.com:4578" method="get" > 

 <br> <br>
Name :<br> <br>
  <input type="text" size="20" name="Name" label="Name" value=>
  <br>
<br>

<br> <br>
<div class="tooltip">Pass Rider # (11 digits)
  <span class="tooltiptext">PPR# + 2 digit dependent ID Example 027266000-00</span>
<br> <br>
  <input type="text" size="20" name="PPR" label="PPRNumber" value=>
  <br>
<br>
</div

<br> <br>
 Contact EMail (Mobile Accessible):<br> <br>
  <input type="text" size="50" name="DeviceId" label="ContactInfo" value=>
  <br>
<br>
<br> <br>

  <input type="submit" value="Register" size="100" id="user_input">
</form> 

<p><span id='display'></span></p>
  <tr>
    <td width="100%" align="center"></td>
  </tr>
  <tr>
    <td width="100%" align="center"></td>
  </tr>
</table>
</center></div>
</body>
</html>
