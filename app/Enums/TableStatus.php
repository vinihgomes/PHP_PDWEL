<?php

namespace App\ENums;

enum TableStatus: string
{
    case Pendente = 'pending';
    case Disponível = 'available';
    case Indisponível = 'unavailable';
}
