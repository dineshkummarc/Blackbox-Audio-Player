<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script src="/js/jquery-1.7.1.min.js" type="text/javascript"></script>

<link rel="stylesheet/less" type="text/css" href="style.less">
<script src="../js/less-1.1.5.min.js" type="text/javascript"></script>

<script type="text/javascript" src="blackbox-0.1.js">Blackbox.init();</script>

<script type="text/javascript" src="js/soundmanager2.js"></script>
<script src="http://connect.soundcloud.com/sdk.js" type="text/JavaScript"></script>

<script type="text/JavaScript">
SC.initialize({ client_id: "jzpVcFeuZMyd54jYSxFGvw" });
</script>
  

<style type="text/css">
@-webkit-keyframes shift {
    0% {background: #666;}
    
    50% {background: #90C400;}
 
    100% {background: #666;} 
}

/* #progress.active { -webkit-animation: shift 2s infinite linear; } */


</style>
</head>

<body>

<div id="player">

	<div id="controls">
			<a id="prev" "href="#" onclick="javascript:Blackbox.prev(); return false;"></a>
			<a id="play-pause" "href="#" onclick="javascript:Blackbox.pause(); return false;"></a>
			<a id="next" href="#" onclick="javascript:Blackbox.next(); return false;"></a>
		
			<div id="volume-container">
				<div id="volume">
					<div id="level"></div>
				</div>
			</div>
		
			<div id="track-link"></div>
		</div>
	
		<div id="scrubber">
			<div id="time">
				<span id="time-elapsed"></span> |
				<span id="time-total"></span>
			</div>
			<div id="title-container"><div id="title"></div></div>
			<div id="progress"></div>
	</div>
	
</div>
<a href="#" onclick="javascript: alert(Blackbox.getDuration()); ">What's the duration?</a>
<a href="http://listunes.s3.amazonaws.com/mp3%2F11-2011%2FWork_Hard_Play_Hard_Paris_FZ__Simo_T_Remix.mp3" class="bbx mp3">Some Artist - Some Track</a>
<a href="http://soundcloud.com/shekel/shekel-persian-lab-mix-2011" class="bbx sc">SoundCloud</a>


</body>
</html>
