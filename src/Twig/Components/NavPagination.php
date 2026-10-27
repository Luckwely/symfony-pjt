<?php

namespace App\Twig\Components;

use Knp\Component\Pager\Pagination\PaginationInterface;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class NavPagination
{
    public PaginationInterface $pagination;
}
