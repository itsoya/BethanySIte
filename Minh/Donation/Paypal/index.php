<html>
    <head>
    </head>
    <body>
        <form action="paypal_donate.php" method="post" style="margin:10%;">
            <input type="number" name="donation_amount"></input>
            <input type="submit" value="Donate"></input>
        </form>

        <div>
          <h1>Test</h1>
          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin:10%;">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="KVXMBKMSVRVQL">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
        </div>

        <div>
          <h1>Donate To This</h1>

          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="KT46GAPN5F4CJ">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>

        </div>

    </body>
 </html>
