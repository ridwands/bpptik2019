<script type="text/javascript">
var capnum = 0;
function add(){
     capnum++;
     document.getElementById('display').innerHTML = capnum;
}
</script>
<button onclick="add()">Add</button>
<div id="display"><script type="text/javascript">document.write(capnum);</script></div>
