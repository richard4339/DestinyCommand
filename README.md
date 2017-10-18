# Install DestinyCommand
1. Get the repository: `https://github.com/xgerhard/DestinyCommand.git`
2. Run `composer install` from the `src` folder
3. Rename `.env.example` to `.env`
4. Run `php artisan key:generate` to generate a key inside `.env`
5. Enter a Bungie API key in `.env` from `https://www.bungie.net/en/Application`

# Get manifest
1. Uncomment line 17 in `src\app\Destiny\Manifest.php`  
This will force the request below to download the manifest.
2. Do a request that requires the manifest for example: `{url}/api/command?query=primary%20xgerhard`
3. Comment line 17 in `src\app\Destiny\Manifest.php` to put the app back in regular mode.

# Support
For help contact us <a href="https://twitter.com/destinycommand">@DestinyCommand</a> on Twitter