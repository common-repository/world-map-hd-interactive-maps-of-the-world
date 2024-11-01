<?php
$urlx=get_site_url();
$urlx=str_replace("https://", "",$urlx );
$urlx=str_replace("http://", "", $urlx);
$urlx=str_replace("www.", "", $urlx);
?>
<div class="wrap">

<p style="background-color:#FFF;margin: 0;padding: 10px;box-sizing: border-box;border-radius: 5px;">
<a href="https://www.worldmaphd.com/?s=wp&u=<?php echo $urlx; ?>" target="blank">
<img src="<?php echo plugins_url( 'logo.png', __FILE__ ); ?>" alt="logo worldmaphd" />
</a></p>

<h1 style="font-weight: 700;padding: 10px 0;margin: 20px 0 0 0;">World Map HD - Interactive Maps of the World</h1>
<p>This plugin lets you show an interactive world map using a shortcode or a widget inside posts, pages, or template files.</p>


<div style="display:inline-block;border:1px solid #CCC;border-radius:5px;padding:15px;background-color: #fbffd4;line-height: 2;box-sizing: border-box;">

<p style="font-weight:700;font-size:1.2em">&#10148; USEFUL TIP: For a few dollars with a Premium account you will receive:</p>
<ul>
<li>+ 230+ HD maps of all the countries</li>
<li>+ Editor tool to customize colors of regions and tooltips</li>
<li>+ Add clickable external pages</li>
<li>+ Add custom markers</li>
<li>+ 230 HD flags of the world with full license</li>
<li>and much more.</li>
</ul>
<a href="https://www.worldmaphd.com/interactive-map-creator/" style="text-decoration: none;font-weight: 700;background-color: #008c06;border-radius: 3px;box-sizing: border-box;color: #FFF;padding: 3px 10px;display: block;text-align: center;margin: 10px 0 0 0;"  target="blank">Try it now ></a>
</div>




</p>
 
 
 <h2>HOW TO USE THIS FREE PLUGIN</h2>
	
<h2>OPTION 1: Use a shortcode</h2>
<p>Use this shortcode [WorldMapHD title="custom-title"] or [WorldMapHD] in order to display the output in your specific posts or pages. </p>
<p>Use this code &lt;?php echo do_shortcode( &#39;[WorldMapHD title="custom-title"]&#39; ); ?&gt;
 in order to display the output in your WordPress template.
 </p>
	
<h2 style="margin: 20px 0 0 0;display: inline-block;">OPTION 2: Use a widget</h2>
<p>Go to Appearance > Widgets and add WorldMapHD widget where you want to show it.</p>
	
</div>