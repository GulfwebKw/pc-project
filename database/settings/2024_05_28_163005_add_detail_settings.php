<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.activeBlueButton', true);
        $this->migrator->add('default.blueButtonText', 'Schedule Consultation');
        $this->migrator->add('default.blueButtonURL', 'https://project-kuwait.com/contact-us');
        $this->migrator->add('default.sendMessageTitleInPages', 'Get A Free Quote');
        $this->migrator->add('default.HomePageHeaderImage', 'https://project-kuwait.com/contact-us');
        $this->migrator->add('default.HomePageContactUsTitle', 'Contact Us for Expert Legal Guidance');
        $this->migrator->add('default.HomePageContactUsSubTitle', 'Contact Us');
        $this->migrator->add('default.HomePageContactUsContent', 'Provide professional advice and guidance on legal matters, helping clients understand their rights, obligations, and potential courses.');
    }
};
