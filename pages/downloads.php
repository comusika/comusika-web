<?php include 'download/download-list.php'; $downloads = getDownloadList(null);
function echoDownload($arr) {
  foreach ($arr as $key => $value) {
    if ($key > 0) echo "<br/>\n";
    echo $value['prefix'].'<a href="download/?'.$value['file'].'" title="Download '.$value['name'].'"><img src="images/filetypes/'.$value['icon'].'.png" alt="['. strtoupper($value['icon']).']" width="16" height="16"/> '.$value['ver'].'</a> ['.$value['date'].']';
  }
} ?><div id="content">
<h1 id="downloads">Downloads</h1>
<p>Releases are experimental and useful only for preview/testing...</p>
<p>TODO</p>
<p>
<a href="download/?<?php echo $downloads['studio']['stb'][0]['file']; ?>" class="button button-green"><img src="images/filetypes/windows-32x32.png" style="vertical-align: middle;" width="28" height="28" alt="[WIN]"/>&nbsp;Download Installer (Windows)</a>&nbsp;
<a href="download/?<?php echo $downloads['studio']['stb'][1]['file']; ?>" class="button button-green"><img src="images/filetypes/zip-32x32.png" style="vertical-align: middle;" width="28" height="28" alt="[ZIP]"/>&nbsp;Download ZIP (Other platforms)</a></p>
<table class="downloads">
<tr><th>Release&nbsp;</th><th>Stable&nbsp;</th></tr>
<tr><td>Studio</td>
  <td><?php echoDownload($downloads['studio']['stb']); ?></td>
</table>
<p><a href="?older-downloads">Older releases</a></p>

<h2 id="development">Development Versions Download</h2>
<p>Development versions are likely untested/broken and at your own risk!</p>
<table class="downloads-dev">
<tr><th>Release&nbsp;</th><th>Development&nbsp;</th></tr>
<tr><td>Studio</td>
  <td><?php echoDownload($downloads['studio']['dev']); ?></td></tr>
</table>

</div>
</body>
</html>