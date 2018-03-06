# Trade-Satoshi-API
TradeSatoshi.com Compatible API

----
Update 2018-03-05

https://www.tradesatoshi.com/api/ changed to https://tradesatoshi.com/api/
Added the SubmitTransfer function
Added Sample

-----
Version 2016-11-27/02


Know Problems in API:

1) Sometimes API return success=true with no message and no result instead of success=false

2) Object/Array Keys can differ from the current website api documentation. (eg Avaliable is available, and sometimes case keys can be lower instead of upper)

---- To reduce any error, all keys returned are converted to lower in the index.php file
