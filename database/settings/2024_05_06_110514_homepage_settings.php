<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;
use Illuminate\Support\Facades\Schema;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.headerSubTitle', 'Trusted Law Consulting Services');
        $this->migrator->add('default.headerTitle', 'Elevate your legal strategy partner to consalt');
        $this->migrator->add('default.headerButtonLabel', 'Start Legal Consultation');
        $this->migrator->add('default.headerButtonLink', '/contact-us');
        $this->migrator->add('default.headerContent', 'We have a deep understanding of various industries, allowing <br> us to provide specialized legal guidance tailored to your sector.');
        $this->migrator->add('default.aboutUsTitle', 'ABOUT US');
        $this->migrator->add('default.aboutUsSubTitle', 'What we do');
        $this->migrator->add('default.aboutUsContent', 'Welcome to Project Company, where expertise meets innovation, and challenges transform into opportunities. Established with a passion for catalyzing growth and driving meaningful change, we are a dynamic consultancy firm dedicated to empowering businesses to achieve their full potential.');
        $this->migrator->add('default.aboutUsButtonLabel', 'About Us');
        $this->migrator->add('default.aboutUsButtonLink', '/page/contact-us');
        $this->migrator->add('default.aboutUsImage', '/assets/img/image-01.jpg');
        $this->migrator->add('default.industriesTitle', 'Our Industries');
        $this->migrator->add('default.industriesSubTitle', 'How it works');
        $this->migrator->add('default.industriesContent', 'We are a team of highly experienced project management professionals with a powerful reputation for delivering successful projects in the construction, Oil &Gas industries. With over 25 years of collective experience in international project management consulting,Oil & Gas, Energy, PPP Projects, and government and private projects, our team possesses the expertise and knowledge required to ensure the smooth execution of your project.');
        $this->migrator->add('default.industriesButtonLabel', 'Learn More');
        $this->migrator->add('default.industriesButtonLink', '/page/contact-us');
        $this->migrator->add('default.industriesImage', '/assets/img/image-01.jpg');
        $this->migrator->add('default.industriesList', [ ['title' => 'Project & Claim Management'] , ['title' =>'Information Technology'] , ['title' => 'Medical System management' ] , ['title' => 'Corporate Services']]);
        $this->migrator->add('default.visionTitle', 'Vision');
        $this->migrator->add('default.visionContent', '<strong>Our Approach:</strong> What sets us apart is our holistic approach to consultancy. We understand that true transformation requires more than just surface-level fixes. That\'s why we take the time to delve deep into the heart of each challenge, exploring every angle and uncovering hidden opportunities for growth. By combining analytical rigor with creative thinking, we develop innovative strategies that drive tangible results and deliver lasting impact.
                      <br><br><strong>Our Values:</strong> What sets us apart is our holistic approach to consultancy. We understand that true transformation requires more than just surface-level fixes. That\'s why we take the time to delve deep into the heart of each challenge, exploring every angle and uncovering hidden opportunities for growth. By combining analytical rigor with creative thinking, we develop innovative strategies that drive tangible results and deliver lasting impact.');
        $this->migrator->add('default.visionButtonLabel', 'Learn More');
        $this->migrator->add('default.visionButtonLink', '/page/vision');
        $this->migrator->add('default.visionImage', '/assets/img/image-01.jpg');
        $this->migrator->add('default.comments', [['from' => 'Alex-David Luis' , 'subFrom' => 'Our Attorneys' , 'image' => '/assets/img/image-01.jpg' , 'comment' => 'Our law consulting team comprises seasoned legal professionals with a track record of success across various industries and legal domains. You can trust in our expertise and dedication to achieving the best possible outcomes for you.']]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
