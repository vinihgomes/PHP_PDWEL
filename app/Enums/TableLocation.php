<?php

namespace App\ENums;

enum TableLocation: string
{
    case Frente = 'front';
    case Interna = 'inside';
    case Externa = 'outside';
}
