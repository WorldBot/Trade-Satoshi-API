<?php
	// feed $API_PUBLIC_KEY	& $API_SECRET_KEY in api_tradesatoshi.php file
	@include('api_tradesatoshi.php');

	/* ----- Public Functions ----- */

	 $R = GetCurrencies();

	// $R = GetTicker('NKA_BTC'); // market

	// $R = GetMarketHistory('NKA_BTC',20); // market,count

	// $R = GetMarketSummary('NKA_BTC'); // market

	// $R = GetMarketSummaries();

	// $R =  GetOrderBook('LTC_BTC','Buy',20); // market,type,count


	/* ----- Private Functions ----- */

	// $R = GetBalance("BTC"); // currency

	// $R = GetBalances();

	// $R = GetOrder(1001); //OrderId

	// $R = GetOrders('LTC_BTC',20); //Market,Count

	// $R = SubmitOrder('NKA_BTC','Buy',10000,0.00000001); //Market,Type,Amount,Price

	// $R = CancelOrder('Single',1001,''); //Type,OrderId,Market

	// $R = GetTradeHistory('NKA_BTC',20); //Market,Count

	// $R = GenerateAddress('PPC'); //Currency

	// $R = SubmitWithdraw('DOGE','DLciqeWyaG8wQ7sK96hcR33Fguovk8betK',13); //Currency,Address,Amount

	// $R = GetDeposits('DOGE'); //Currency

	// $R = GetWithdrawals('DOGE',20); //Currency,Count


	/* ----- RESULTS ----- */
	if (!$R->success || !$R->result || $R->message)
	{
		die('<h1>API ERROR</h1><h2>message: '.$R->message.'</h2>');
	}
	else
	{
		$R = $R->result;		
	}

	var_dump($R);
?>