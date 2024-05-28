<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomepageSettings extends Settings
{
    public string $headerTitle;
    public string $headerSubTitle;
    public string $headerContent;
    public string $headerButtonLabel;
    public string $HomePageHeaderImage;
    public string $headerButtonLink;
    public string $aboutUsTitle;
    public string $aboutUsSubTitle;
    public string $aboutUsContent;
    public string $aboutUsButtonLabel;
    public string $aboutUsButtonLink;
    public string $aboutUsImage;
    public string $servicesTitle;
    public string $servicesSubTitle;
    public string $servicesContent;
    public string $servicesImage;
    public string $industriesTitle;
    public string $industriesSubTitle;
    public string $industriesContent;
    public string $industriesButtonLabel;
    public string $industriesButtonLink;
    public string $industriesImage;
    public array $industriesList;
    public string $visionTitle;
    public string $visionContent;
    public string $visionButtonLabel;
    public string $visionButtonLink;
    public string $visionImage;
    public string $HomePageContactUsTitle;
    public string $HomePageContactUsSubTitle;
    public string $HomePageContactUsContent;
    public array $comments ;
    public static function group(): string
    {
        return 'default';
    }
}
