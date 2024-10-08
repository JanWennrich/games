<?php

namespace Jan\GamesLibrary\GameAttribute\Platform;

use Jan\GamesLibrary\GameAttribute\Platform;

final class Gog implements Platform
{
    public function getIconPath(): string
    {
        return 'platform_icons/gog.png';
    }

    public function getName(): string
    {
        return 'GOG';
    }
}
