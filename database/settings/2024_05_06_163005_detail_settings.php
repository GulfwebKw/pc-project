<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.title', 'PC Project');
        $this->migrator->add('default.email', 'info@PCProject.com');
        $this->migrator->add('default.phone', '+965 2227 2212');
        $this->migrator->add('default.officeAddress', 'Mahboula - Coastal Road – Block 4 Compound 54 - Villa 4');
        $this->migrator->add('default.logo', '01HYMNT5DKQDVZ84RPYN1N5PTG.png');
    }
};
