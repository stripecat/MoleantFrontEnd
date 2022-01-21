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

<script>

function CreateAccount(evt, FirstName,MiddleName,LastName,PurchasedSubscriptions,Email) {
							var client = new HttpClient();
							
							client.get('/get-token/?Service=CreateAccount&IntentLock=CREATE', function(response) {

								var xhttp = new XMLHttpRequest();
								xhttp.onreadystatechange = function() {
									if (this.readyState == 4) {

										jsonresponse = JSON.parse(this.responseText);
										if (this.status == 200) {

											// ListServersForSystem();
											window.location.replace("checkoutdone.php");
											Vue.$toast.success("Account successfully created");
										} else {
											console.log(jsonresponse);
											Vue.$toast.error(jsonresponse.message + ': ' + jsonresponse.subcode);
										}
									}
								};
								xhttp.open("POST", "https://api.moleant.com/account/CreateAccount/", true);
								xhttp.send("{\"jwt\":\"" + response + "\",\"FirstName\":\"" + FirstName + "\",\"MiddleName\":\"" + MiddleName + "\",\"LastName\":\"" + LastName + "\",\"PurchasedSubscriptions\":[\"" + PurchasedSubscriptions + "\"],\"Email\":\"" + Email + "\",\"Mode\":\"Create\" }");

							});
						}

</script>

<div class="moleantdiv">

<h2><img src="https://sadiscover.blob.core.windows.net/img/billing.svg" width=48px height=48px align="center"> Enter your payment information</h2>
<p>
Details about your new account login will be send to your email address.
</p>
</div>


<div class="row">
<div class="column">
<div class="moleantdiv">

<html>
<textarea style="display: none" id="KCO">
        <div id=\"klarna-checkout-container\" style=\"overflow: hidden;\">\n  <div id=\"klarna-unsupported-page\">\n  <style type=\"text/css\">\n  @-webkit-keyframes klarnaFadeIn{from{opacity:0}to{opacity:1}}@-moz-keyframes klarnaFadeIn{from{opacity:0}to{opacity:1}}@keyframes klarnaFadeIn{from{opacity:0}to{opacity:1}}#klarna-unsupported-page{opacity:0;opacity:1\\9;-webkit-animation:klarnaFadeIn ease-in 1;-moz-animation:klarnaFadeIn ease-in 1;animation:klarnaFadeIn ease-in 1;-webkit-animation-fill-mode:forwards;-moz-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-duration:.1s;-moz-animation-duration:.1s;animation-duration:.1s;-webkit-animation-delay:5s;-moz-animation-delay:5s;animation-delay:5s;text-align:center;padding-top:64px}#klarna-unsupported-page .heading{font-family: \"Klarna Headline\", Helvetica, Arial, sans-serif;color: rgb(23, 23, 23);font-size: 36px;letter-spacing: -0.2px;-webkit-font-smoothing: antialiased;}#klarna-unsupported-page .subheading{font-family: \"Klarna Text\", \"Klarna Sans\", Helvetica, Arial, sans-serif;color: rgb(23, 23, 23);-webkit-font-smoothing: antialiased;line-height: 28px;font-weight: 400;font-size: 19px;max-width: 640px;margin: 20px auto;}#klarna-unsupported-page .reload {cursor: pointer;outline: none;-webkit-tap-highlight-color: rgba(255, 255, 255, 0);border-width: 1px;background-color: rgb(38, 37, 37);border-color: rgb(38, 37, 37);padding: 15px 24px;margin-top: 15px;color: rgb(255, 255, 255);font-family: \"Klarna Text\", \"Klarna Sans\", Helvetica, Arial, sans-serif;font-weight: 500;text-rendering: geometricprecision;font-size: 100%;}\n  </style>\n  <h1 class=\"heading\">Something went wrong</h1>\n  <p class=\"subheading\">Sorry for any inconvenience, please try reloading the checkout page or try again later.</p>\n  <p class=\"subheading\">If the problem persists it maybe be because you are using an old version of the web browser which is not safe nor compatible with modern web sites. For a smoother checkout experience, please install a newer browser.</p>\n  <button class=\"reload\" onclick=\"reloadCheckoutHandler && reloadCheckoutHandler()\">Reload checkout</button>\n  </div>\n  <script id=\"klarna-checkout-context\" type=\"text/javascript\">\n  /* <![CDATA[ */\n  var reloadCheckoutHandler;\n  (function(w,k,i,d,n,c,l){\n    w[k]=w[k]||function(){(w[k].q=w[k].q||[]).push(arguments)};\n    l=w[k].config={\n      container:w.document.getElementById(i),\n      ORDER_URL:'https://js.playground.klarna.com/eu/kco/checkout/orders/170a63c0-1a73-6af0-aa1c-50788a020107',\n      AUTH_HEADER:'KlarnaCheckout l3l7kkrazlv7yhayeh8t',\n      LOCALE:'en-GB',\n      ORDER_STATUS:'checkout_incomplete',\n      MERCHANT_NAME:'Your business name',\n      GUI_OPTIONS:[],\n      ALLOW_SEPARATE_SHIPPING_ADDRESS:false,\n      PURCHASE_COUNTRY:'gbr',\n      PURCHASE_CURRENCY:'GBP',\n      TESTDRIVE:true,\n      BOOTSTRAP_SRC:'https://js.playground.klarna.com/kcoc/220119-c2c224d/checkout.bootstrap.js',\n      FE_EVENTS_DISABLED:'false',\n      DEVICE_RECOGNITION_URL:'https://js.playground.klarna.com/eu/kco/checkout/orders/170a63c0-1a73-6af0-aa1c-50788a020107/device_recognition',\n      DEVICE_RECOGNITION_TYPE1:true,\n      DEVICE_RECOGNITION_TYPE3_ORG_ID:'87rxrdob',\n      DEVICE_RECOGNITION_TYPE3_REF:'KLRNA_87rxrdob_170a63c0-1a73-6af0-aa1c-50788a020107',\n      CLIENT_EVENT_HOST:'https://eu.playground.klarnaevt.com'\n    };\n    n=d.createElement('script');\n    c=d.getElementById(i);\n    n.async=!0;\n    n.src=l.BOOTSTRAP_SRC;\n    c.appendChild(n);\n    try{\n      ((w.Image && (new w.Image))||(d.createElement && d.createElement('img'))||{}).src =\n        l.CLIENT_EVENT_HOST + '/v1/checkout/snippet/load' +\n        '?sid=' + l.ORDER_URL.split('/').slice(-1) +\n        '&order_status=' + w.encodeURIComponent(l.ORDER_STATUS) +\n        '&timestamp=' + (new Date).getTime();\n    }catch(e){}\n    reloadCheckoutHandler = function () {\n        try{\n            ((w.Image && (new w.Image))||(d.createElement && d.createElement('img'))||{}).src =\n            l.CLIENT_EVENT_HOST+'/v1/checkout/snippet/reload?sid='+l.ORDER_URL.split('/').slice(-1)+\n            '&order_status='+w.encodeURIComponent(l.ORDER_STATUS)+'&timestamp='+(new Date()).getTime();\n            window.location.reload();\n        }catch(e){}\n    }\n  })(this,'_klarnaCheckout','klarna-checkout-container',document);\n  /* ]]> */\n  </script>\n  <noscript>\nPlease <a href=\"http://enable-javascript.com\">enable JavaScript</a>.\n  </noscript>\n</div>
        </textarea>


	<div id="my-checkout-container"></div>

</html>

	<!-- START - Dont edit -->
	<script type="text/javascript">
		var checkoutContainer = document.getElementById('my-checkout-container')
		checkoutContainer.innerHTML = (document.getElementById("KCO").value).replace(/\\"/g, "\"").replace(/\\n/g, "");
		var scriptsTags = checkoutContainer.getElementsByTagName('script')
		for (var i = 0; i < scriptsTags.length; i++) {
			var parentNode = scriptsTags[i].parentNode
			var newScriptTag = document.createElement('script')
			newScriptTag.type = 'text/javascript'
			newScriptTag.text = scriptsTags[i].text
			parentNode.removeChild(scriptsTags[i])
			parentNode.appendChild(newScriptTag)
		}
	</script>
	<!-- END -->

</div>
</div>



  <div class="column">
<div class="moleantdiv">

<h2>Summary</h2>

<hr>
<p>
Moleant Discover Plan Standard (1GB)
</p>
<p style="font-size:9px">
Subscription. Monthly billed.
</p>
<hr>
<p>Subtotal US$99/mo</p>
<p>TOTAL <b>US$99/mo +tax</b></p>

</div>
</div>
</div>

<div class=moleantdiv>

<p style="font-size:8px">
  By clicking "Agree and subscribe", you agree: You will be charged US$99 (plus tax) monthly and at the end of your one-year term, your subscription will automatically renew monthly until you cancel (price subject to change). No annual commitment required after the first year. Cancel anytime via Moleant Account or Customer Support. Cancel before Jan 22, 2022 to get a full refund and avoid a fee. You also agree to the Terms of Use and the Subscription and Cancellation Terms.

</p>
  
<input type="button" class="button" onclick="CreateAccount(event,document.getElementById('fname').value,document.getElementById('mname').value,document.getElementById('lname').value,document.getElementById('PurchasedSubscriptions').value,document.getElementById('email').value)" value="Agree and subscribe"></button>
</form>
</div>

<script>
  		Vue.use(VueToast, {
			position: 'bottom'
		});
    </script>

<?php

# Load the header file
include("inc/footer.php");
?>