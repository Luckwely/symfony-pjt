<?php

namespace App\Twig\Components;

use App\Entity\Category;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CategoryCard
{
    public Category $category;
}
