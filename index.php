<?php $feedurls = array("https://jharaphula.com/feed/");
shuffle($feedurls); $rss_feed = simplexml_load_file($feedurls[0]);
?>
<div id="onestopshop"><?php 
if (! empty($rss_feed)) { $i = 0;
    foreach ($rss_feed->channel->item as $feed_item) { if ($i >= 32) break; ?>
       
<div class="osclearfix"><div class="entryimg">
    <a target="_blank" href="<?php echo $feed_item->link; ?>"><?php echo array_slice(explode('<p>', $feed_item->description), 0, 20)[0] ?></a>
</div><div>
    <div class="entrytitle"><a target="_blank" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?></a></div>
    <div class="entrydescrip"><?php echo array_slice(explode('<p>', $feed_item->description), 0, 20)[1] ?></div>
</div></div>
      
<?php $i ++; }}?></div>