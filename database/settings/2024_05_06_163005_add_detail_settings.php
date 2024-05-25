<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.location', ['lat' =>  29.33 , 'lng' =>  47.99]);
        $this->migrator->add('default.socials', [
            [
                "link" => "https://instagram.com/yeganehha",
                "icon" => "fa-instagram",
                "help" => null,
            ],
            [
                "link" => "https://twitter.com/yeganehha",
                "icon" => "fa-twitter",
                "help" => null,
            ],
        ]);
    }
};
