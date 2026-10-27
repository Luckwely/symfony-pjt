<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Override;
use Symfony\Component\String\Slugger\SluggerInterface;

class ArticleFixtures extends Fixture implements FixtureGroupInterface
{
    private array $images = [
        'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
        'https://images.unsplash.com/photo-1516321318423-f06f85e504b3',
        'https://images.unsplash.com/photo-1555066931-4365d14bab8c',
        'https://images.unsplash.com/photo-1515879218367-8466d910aaa4',
        'https://images.unsplash.com/photo-1461749280684-dccba630e2f6',
        'https://images.unsplash.com/photo-1504639725590-34d0984388bd',
        'https://images.unsplash.com/photo-1558655146-d09347e92766',
        'https://images.unsplash.com/photo-1561070791-2526d30994b5',
        'https://images.unsplash.com/photo-1559028012-481c04fa702d',
        'https://images.unsplash.com/photo-1545235617-9465d2a55698',
        'https://images.unsplash.com/photo-1551650975-87deedd944c3',
        'https://images.unsplash.com/photo-1558655146-9f40138edfeb',
        'https://images.unsplash.com/photo-1531058020387-3be344556be6',
        'https://images.unsplash.com/photo-1497366811353-6870744d04b2',
        'https://images.unsplash.com/photo-1497366754035-f200968a6e72',
        'https://images.unsplash.com/photo-1497366216548-37526070297c',
        'https://images.unsplash.com/photo-1497366412874-3415097a27e7',
        'https://images.unsplash.com/photo-1524758631624-e2822e304c36',
        'https://images.unsplash.com/photo-1497215728101-856f4ea42174',
        'https://images.unsplash.com/photo-1521737711867-e3b97375f902',
        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
        'https://images.unsplash.com/photo-1519389950473-47ba0277781c',
        'https://images.unsplash.com/photo-1516321165247-4aa89a48be28',
        'https://images.unsplash.com/photo-1556761175-b413da4baf72',
        'https://images.unsplash.com/photo-1551836022-d5d88e9218df',
        'https://images.unsplash.com/photo-1556761175-5973dc0f32e7',
        'https://images.unsplash.com/photo-1522202176988-66273c2fd55f',
        'https://images.unsplash.com/photo-1522071820081-009f0129c71c',
        'https://images.unsplash.com/photo-1531482615713-2afd69097998',
        'https://images.unsplash.com/photo-1523240795612-9a054b0db644',
    ];

    public function __construct(private SluggerInterface $si)
    {
        
    }
    public function load(ObjectManager $manager): void
    {
        $users = $manager->getRepository(User::class)->findAll();
        $categories = $manager->getRepository(Category::class)->findAll();
        $faker = Factory::create();

        for ($i=0; $i < 50; $i++) { 
            $article = new Article();

            $title = $faker->sentence;
            $article->setImage($faker->randomElement($this->images))
                    ->setTitle($title)
                    ->setSlug(
                        $this->si->slug($title)->lower()
                    )
                    ->setDescription($faker->word(2, true))
                    ->setLongDescription($faker->word(5, true))
                    ->setUser($faker->randomElement($users))
                    ->setCategory($faker->randomElement($categories))
                    ->setCreatedAt(new \DateTimeImmutable());

                    $manager->persist($article);
        }


        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['article'];
    }
}
