<div id="player"><embed type="application/x-shockwave-flash" src="aac.swf" width="600" height="20" style="undefined" id="ply" name="ply" bgcolor="4" quality="high" allowscriptaccess="always" allowfullscreen="false" flashvars="autostart=true&amp;file=http://live.japanesemusicid.com:8000/japanesemusic%3Ftype%3D.flv"></div>
<script type="text/javascript">
     var stream = 'http://live.japanesemusicid.com:8000/japanesemusic';
     var autostart = 'true';
     var so = new SWFObject('aac.swf','ply','600','20','9','4');
     so.addParam('allowscriptaccess','always');
     so.addParam('allowfullscreen','false');
     so.addVariable('autostart', autostart);
     so.addVariable('file', stream+'%3Ftype%3D.flv');
     so.write('player');
</script>