## Offers-CLI
PHP CLI Script which will read JSON based data from
an specific endpoint via HTTP.
The script will contain several sub-commands to
filter and output the loaded data. This commands should be:
• Find objects by time interval (given start-date and end-date as argu-
ments to the command)
• Find objects by price range (given price-from and price-to as argu-
ments)
• Find objects by a certain sub-object definition
All given sub-commands should only output objects, that are in stock (quantity).


### Installation
- clone repo
- run `composer du -o`
- run `composer install`

###Usage

Type Belows in command line 
- `php run.php date_filter 2019-03-01T10:00 2019-03-21T19:00`
- `php run.php price_filter 10.00 100.00`
- `php run.php vendor_offers_count <$vendor_id>`


###Tools
- PHP7.2
- composer
- phpunit
- Guzzel
- monlog
