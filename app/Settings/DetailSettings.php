<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class DetailSettings extends Settings
{

    public string $title;
    public string $email;
    public string $phone;
    public string $officeAddress;
    public array $location ;
    public array $socials ;
    public string $logo ;
    public bool $activeBlueButton ;
    public string $blueButtonText ;
    public string $blueButtonURL ;
    public string $sendMessageTitleInPages ;
    public static function group(): string
    {
        return 'default';
    }
}
