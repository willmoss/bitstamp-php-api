## Bitstamp PHP API

[<img src="https://bxmediaus.com/images/bx-media-logo.gif">](https://bxmediaus.com/)

## INTRO

This is a PHP API for Bitstamp's new API, released September 2013.

To install, place in your PHP directory and include into your files.
 
When you construct the method, you include your API_KEY, SECRET and CLIENT_ID, that can be found on the Bitstamp website.


## FEATURES:

bitstamp_query - Query any of the Bitstamp API methods

ticker - Get current Bitstamp ticker

eurusd - Get Bitstamp EUR/USD rate

buyBTC/sellBTC - Buy or Sell BTC at current market price


## EXAMPLE

$bs = new Bitstamp("KEY","SECRET","CLIENT_ID");

print_r($bs->ticker()); // show bid,ask & other price stats

$bs->buyBTC(10); // buy 10 bitcoins at ask price

$bs->bitstamp_query("buy", array('amount'=>'34','price'=>'90')); // place a limit order to buy 34 bitcoin at $90


## Contributing

Want to contribute? Great! 

Just fork our code, make your changes, then let us know and we will incorporate.

1. Fork it.
2. Create a branch (`git checkout -b my_qror`)
3. Commit your changes (`git commit -am "Added Snarkdown"`)
4. Push to the branch (`git push origin my_qror`)
5. Open a [Pull Request][1]
6. Enjoy a refreshing Diet Coke and wait

We encourage you to get in touch and tell us what you think of our code.

We are constantly updating and improving our code. We hope it can be for the benefit of the entire community.

If you want to chat to us, connect to our website: [bxmediaus.com][bxmediaus]


[bxmediaus]: https://bxmediaus.com
