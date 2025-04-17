<?php

namespace SoinalaStudio\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use SoinalaStudio\Voyager\Models\Setting;

class SettingUpdated
{
    use SerializesModels;

    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}
