This solution hopefully fulfils the brief as outlined by the technical test.

It was developed on Laravel 8 and PHP 7.3.33 due to problems getting PHP 8 to work locally (couldn't get mbstring to install). Due to additional issues with cUrl locally, I had trouble running this via `php artisan serve`, so used a basic Docker setup with nginx and php-fpm. I believe it should be runnable just using `php artisan serve` though.

To run, please complete the `WONDE_TOKEN` and `WONDE_SCHOOL_ID` environment variables.
