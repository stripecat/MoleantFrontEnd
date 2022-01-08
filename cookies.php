<?php

$sroot = realpath(dirname(__FILE__));

if (strrpos($sroot, '\\') != "") {
  # Windows
  $sroot = $sroot . "\\";
} else {
  # Linux
  $sroot = $sroot . "/";
}

require $sroot . 'config.php';
require $sroot . 'inc/security.php';
define ("INMOLEANT","TRUE");

# Load the header file

include("inc/header.php");

?>

<div class="moleantdiv">
<h1>Cookie Policy</h1>

<h2>Introduction</h2>
<p>
Moleant AB uses cookies. A cookie is a file containing an identifier (a string of letters and numbers) that is sent by a web server to a web browser and is stored by the browser. The identifier is then sent back to the server each time the browser requests a page from the server. Cookies may be either “persistent” cookies or “session” cookies: a persistent cookie will be stored by a web browser and will remain valid until its set expiry date, unless deleted by the user before the expiry date; a session cookie, on the other hand, will expire at the end of the user session, when the web browser is closed. Cookies do not typically contain any information that personally identifies a user, but personal information that we store about you may be linked to the information stored in and obtained from cookies. We are using both session and persistent cookies on our www.moleant.com. 
</p>
<p>
The names of the cookies that we use on our website, and the purposes for which they are used, are set out below: 
    </p>
<p>
<will be updated soon once the cookies have been activated> 
</p>
<p>
Google Analytics and Adwords on our website to recognize a computer when a user visits our website, track users as they navigate the website, enable the use of a shopping cart on the website, improve the website’s usability, analyze the use of the website, administer the website, prevent fraud and improve the security of the website,  personalize the website for each user, target advertisements which may be of particular interest to specific users such as services from Moleant or subscription of a Moleant application 
</p>
<p>
Most browsers allow you to refuse to accept cookies—for example: 
    </p>
<p>
- <b>Microsoft Internet Explorer (version 10)</b>. Block cookies by using the cookie handling override settings available by clicking “Tools,” “Internet Options,” “Privacy,” and then “Advanced” 
</p>
<p>
- <b>Mozilla Firefox(version 24)</b>. Block all cookies by clicking “Tools,” “Options,” “Privacy,” selecting “Use custom settings for history” from the drop-down menu, and unticking “Accept cookies from sites” 
</p>
<p>
- <b>Google Chrome(version 29)</b>. Block all cookies by accessing the “Customize and control” menu, and clicking “Settings,” “Show advanced settings,” and “Content settings,” and then selecting “Block sites from setting any data” under the “Cookies” heading. 
</p>
<p>
Note! Blocking all cookies will have a negative impact upon the usability of many websites. If you block cookies, you will not be able to use all the features on our website. 
</p>
</div>
<div class="moleantdiv">
 

<h2>Change cookie setting</h2>
<p>

Most web browsers allow some control of most cookies through the browser settings. To find out more about cookies, including how to see what cookies have been set, visit www.aboutcookies.org or www.allaboutcookies.org. But please be aware that deleting cookies will have a negative impact on the usability of many websites. Find out how to manage cookies on some web browsers: 
</p>
<p>
- <a href="https://support.google.com/accounts/answer/61416?co=GENIE.Platform%3DDesktop&hl=en" target="_blank"><u>Google Chrome</u></a>
</p>
<p>
- <a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop?redirectslug=enable-and-disable-cookies-website-preferences&redirectlocale=en-US" target="_blank"><u>Mozilla Firefox</u></a> 
</p>
<p>
- <a href="https://support.microsoft.com/en-gb/windows/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d" target="_blank"><u>Microsoft Internet Explorer</u></a> 
</p>
<p>
- <a href="https://support.microsoft.com/en-gb/windows/microsoft-edge-browsing-data-and-privacy-bb8174ba-9d73-dcf2-9b4a-c582b4e640dd" target="_blank"><u>Microsoft Edge</u></a> 
</p>
<p>
- <a href="https://support.apple.com/en-hk/guide/safari/sfri11471/mac" target="_blank"><u>Apple Safari</u></a> 
</p>
<p>
Can't find your browser? Please visit related information the browser developer's website. 
</p>
<p>
</div>
<div class="moleantdiv">
    <h2>Opt out Google Analytics</h2>
    <p>
To opt out of being tracked by Google Analytics across all websites, visit http://tools.google.com/dlpage/gaoptout. 
</p>

</div>
<?php

  # Load the header file
  include("inc/footer.php");
  ?>