<!--
by : Abdalulla ahmed : @coderabdullah
by : Azozz ALFiras   : @AzozzALFiras
 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>AZ</title>
    
    <!-- FILE CSS -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="iSTORE" content="Azozz ALFiras">
        <title>Azozz STORE</title>
        <meta name="description" content="Azozz ALFiras">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/RAXAZ.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">


<body>
    <center>

<div class="name-tweaks">
<h1><span class="developer">AZ</span>installer</h1>
</div>

<section class="row">
	<div class="info">
	    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- repo azozz -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4376246750471322"
     data-ad-slot="8941179500"
     data-ad-format="link"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br><br>
<br><br>
<!-- 
غير ال linkback الى رابط موقعك
-->
<a class="download download-az down" onclick="window.location='linkback'">
       <i class="fa fa-chevron-circle-left"></i>
توقيع تطبيق جديد
    </a>
<br><br>
 <p style="color: #fff;">لتثبيت التطبيق الذي قمت في توقعيه اضغط على تثبيت التطبيق</p>
        
<br><br>
        <?php

if(isset($_POST['submit'])){

  $url = $_POST['url'];
  $rand = 'q1w2e3r4t5y6u7i7o8p9asdf7g5h7j8k7l5z4x6cv8b8n9m';
  $rand2= substr(str_shuffle($rand),1,5);

$plist = "

<!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">
<plist version=\"1.0\">
<dict>
<!-- array of downloads. -->
	<key>items</key>
	<array>
		<dict>
			<!-- an array of assets to download -->
				<key>assets</key>
				<array>
					<dict>
						<!-- required. the asset kind. -->
						<key>kind</key>
						<string>software-package</string>
						<key>url</key>
						<string>$url</string>
					</dict>
					<dict>
						<key>kind</key>
						<string>display-image</string>
						<key>needs-shine</key>
						<true/>
						<key>url</key>
						<string>https://a1iraqi.me/azozzalfiras.png</string>
					</dict>
					<dict>
						<key>kind</key>
						<string>full-size-image</string>
						<key>needs-shine</key>
						<true/>
						<key>url</key>
						<string>https://a1iraqi.me/azozzalfiras.png</string>
					</dict>
				</array>
				<key>metadata</key>
			<dict>
				<key>bundle-identifier</key>
				<string>me.$rand2.AZinstaller</string>
				<key>bundle-version</key>
				<string>5.4</string>
				<key>kind</key>
				<string>software</string>
				<key>title</key>
				<string>

install Application 

by Azozz ALFiras
twitter   : @AzozzALFiras
snapchat  : @AzozzALFiras
instagram : @7it

التثبيت بواسطة اداة AZinstaller


				</string>
			</dict>
		</dict>
	</array>
</dict>
</plist>

 
";

  file_put_contents(__DIR__.'/installer/'.$rand2.".plist",$plist);


 $pathinstall = "linkweb"."/installer/$rand2".".plist"; 

 // غير ال linkweb الى رابط موقعك لكي يتم التثبيت الملفر 
 
 
 $action ="itms-services://?action=download-manifest&url=";

 $goplist= "<center ><span class='download download-az down'>" .  "<i class='fa fa-cloud-download'></i>" . "<a class='downapp' onclick=\"window.location='$action$pathinstall'\">" . "
 تثبيت التطبيق  </a>" . "</span></center>";


 echo $goplist;

 die();

}


?>
</form>
</div>
</section>
</center>

    
 
  



	
