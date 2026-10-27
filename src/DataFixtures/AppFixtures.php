<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger)
    {
        
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $categoryData = [
            [
                'title' => 'Développement Web',
                'description' => 'Apprenez à créer des sites web modernes et interactifs.',
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
            ],
            [
                'title' => 'Python',
                'description' => 'Apprenez Python pour développer vos compétences en programmation.',
                'image' => 'https://images.unsplash.com/photo-1526379095098-d400fd0bf935',
            ],
            [
                'title' => 'Français',
                'description' => 'Améliorez votre français pour mieux communiquer au quotidien.',
                'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8',
            ],
            [
                'title' => 'Anglais',
                'description' => 'Développez votre anglais pour vos études et votre carrière.',
                'image' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d',
            ],
            [
                'title' => 'Design Graphique',
                'description' => 'Développez votre créativité grâce aux techniques du design graphique.',
                'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5',
            ],
            [
                'title' => 'Motion Design',
                'description' => 'Découvrez l’animation et créez des contenus visuels dynamiques.',
                'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f',
            ],
        ];

        foreach ($categoryData as $categ) {
            $category = new Category();

            $category->setTitle($categ['title']);
            $category->setImage($categ['image']);
            $category->setDescription($categ['description']);
            $category->setSlug(
                $this->slugger->slug(
                    $categ['title']
                )->lower()
            );

            $manager->persist($category);
            
        }
        
        $manager->flush();

    }
}
