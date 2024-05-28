<?php

namespace App\Filament\Pages;

use Dotswan\MapPicker\Fields\Map;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Pages\SettingsPage;
use Guava\FilamentIconPicker\Forms\IconPicker;

class DetailSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = \App\Settings\DetailSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('email')
                    ->required(),
                TextInput::make('phone')
                    ->required(),
                TextInput::make('officeAddress')
                    ->required(),
                Forms\Components\Repeater::make('socials')
                    ->schema([
                        TextInput::make('link')->required()->url(),
                        Select::make('icon')
                            ->required()
                            ->searchable()
                            ->options([
                            'fa-facebook' => 'Facebook',
                            'fa-twitter' => 'Twitter',
                            'fa-instagram' => 'Instagram',
                            'fa-linkedin' => 'LinkedIn',
                            'fa-youtube' => 'YouTube',
                            'fa-pinterest' => 'Pinterest',
                            'fa-snapchat' => 'Snapchat',
                            'fa-tumblr' => 'Tumblr',
                            'fa-reddit' => 'Reddit',
                            'fa-whatsapp' => 'WhatsApp',
                            'fa-skype' => 'Skype',
                            'fa-github' => 'GitHub',
                            'fa-vimeo' => 'Vimeo',
                            'fa-spotify' => 'Spotify',
                            'fa-soundcloud' => 'SoundCloud',
                            'fa-twitch' => 'Twitch',
                            'fa-discord' => 'Discord',
                            'fa-slack' => 'Slack',
                            'fa-medium' => 'Medium',
                            'fa-dribbble' => 'Dribbble',
                            'fa-behance' => 'Behance',
                            'fa-flickr' => 'Flickr',
                            'fa-vine' => 'Vine',
                            'fa-tiktok' => 'TikTok',
                            'fa-weibo' => 'Weibo',
                            'fa-renren' => 'Renren',
                            'fa-vk' => 'VK',
                            'fa-wechat' => 'WeChat',
                            'fa-line' => 'Line',
                            'fa-telegram' => 'Telegram',
                            'fa-sketch' => 'Sketch',
                            'fa-codepen' => 'CodePen',
                            'fa-stack-overflow' => 'Stack Overflow',
                            'fa-wordpress' => 'WordPress',
                            'fa-blogger' => 'Blogger',
                            'fa-quora' => 'Quora',
                            'fa-amazon' => 'Amazon',
                            'fa-ebay' => 'eBay',
                            'fa-paypal' => 'PayPal',
                            'fa-apple' => 'Apple',
                            'fa-android' => 'Android',
                            'fa-windows' => 'Windows',
                            'fa-linux' => 'Linux',
                            'fa-chrome' => 'Chrome',
                            'fa-firefox' => 'Firefox',
                            'fa-opera' => 'Opera',
                            'fa-safari' => 'Safari',
                            'fa-edge' => 'Microsoft Edge',
                            'fa-internet-explorer' => 'Internet Explorer',
                        ]),
                        TextInput::make('help')->nullable(),
                    ])
                    ->columnSpanFull()
                    ->columns(3),

                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->directory(now()->format('Y/m/d'))
                    ->required(),
                Map::make('location')
                    ->label('Location')
                    ->afterStateUpdated(function (Get $get, Set $set, string|array|null $old, ?array $state): void {
                        $set('latitude', $state['lat']);
                        $set('longitude', $state['lng']);
                    })
                    ->afterStateHydrated(function ($state, $record, Set $set): void {
                        $set('location', ['lat' => $state['lat'], 'lng' => $state['lng']]);
                    })
                    ->extraStyles([
                        'min-height: 250px',
                        'border-radius: 5px'
                    ])
                    ->liveLocation()
                    ->showMarker()
                    ->markerColor("#22c55eff")
                    ->showFullscreenControl()
                    ->showZoomControl()
                    ->draggable()
                    ->tilesUrl("https://tile.openstreetmap.de/{z}/{x}/{y}.png")
                    ->zoom(10)
                    ->detectRetina()
                    ->showMyLocationButton()
                    ->extraTileControl([])
                    ->extraControl([
                        'zoomDelta'           => 1,
                        'zoomSnap'            => 2,
                    ]),

                Forms\Components\Checkbox::make('activeBlueButton')
                    ->label('Active blue button in navbar') ,

                TextInput::make('blueButtonText')
                    ->required(),
                TextInput::make('blueButtonURL')
                    ->url()
                    ->required(),
                TextInput::make('sendMessageTitleInPages')
                    ->label('Send message title in pages')
                    ->required(),
            ]);
    }
}
