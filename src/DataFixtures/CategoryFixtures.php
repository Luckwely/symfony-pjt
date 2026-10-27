<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoryFixtures extends Fixture implements FixtureGroupInterface
{
    public function __construct(private SluggerInterface $slugger)
    {
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $categoriesData = [
            [
                'title' => 'Développement Web',
                'description' => 'Apprenez à créer des sites web modernes et interactifs.',
                'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'JavaScript',
                'description' => 'Maîtrisez JavaScript pour rendre vos applications web dynamiques.',
                'image' => 'https://images.unsplash.com/photo-1627398242454-45a1465c2479?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'PHP',
                'description' => 'Découvrez PHP pour développer des applications web côté serveur.',
                'image' => 'https://images.unsplash.com/photo-1599507593499-a3f7d7d97667?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Symfony',
                'description' => 'Développez des applications robustes avec le framework Symfony.',
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'React',
                'description' => 'Créez des interfaces modernes et performantes avec React.',
                'image' => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Vue.js',
                'description' => 'Apprenez à construire des interfaces interactives avec Vue.js.',
                'image' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Python',
                'description' => 'Apprenez Python pour la programmation, les données et l’automatisation.',
                'image' => 'https://images.unsplash.com/photo-1526379095098-d400fd0bf935?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Data Science',
                'description' => 'Analysez les données et découvrez les informations importantes.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Intelligence Artificielle',
                'description' => 'Découvrez les bases de l’intelligence artificielle et du machine learning.',
                'image' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Cybersécurité',
                'description' => 'Apprenez à protéger les systèmes et les données numériques.',
                'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Design Graphique',
                'description' => 'Développez votre créativité et apprenez les principes du design.',
                'image' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Concevez des interfaces simples, modernes et agréables à utiliser.',
                'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Photoshop',
                'description' => 'Apprenez à retoucher et créer des visuels professionnels.',
                'image' => 'https://images.unsplash.com/photo-1572044162444-ad60f128bdea?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Illustration',
                'description' => 'Développez vos compétences en illustration numérique et créative.',
                'image' => 'https://images.unsplash.com/photo-1561214115-f2f134cc4912?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Motion Design',
                'description' => 'Créez des animations et des contenus visuels captivants.',
                'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Montage Vidéo',
                'description' => 'Apprenez à monter et améliorer vos vidéos avec des techniques professionnelles.',
                'image' => 'https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Photographie',
                'description' => 'Apprenez les bases de la photographie et améliorez vos prises de vue.',
                'image' => 'https://images.unsplash.com/photo-1452780212940-6f5c0d14d848?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Anglais',
                'description' => 'Améliorez votre anglais pour vos études, votre travail et vos voyages.',
                'image' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Français',
                'description' => 'Perfectionnez votre français à travers des exercices pratiques.',
                'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Call Center',
                'description' => 'Développez les compétences nécessaires pour travailler dans un centre d’appels.',
                'image' => 'https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Communication',
                'description' => 'Améliorez votre communication professionnelle et interpersonnelle.',
                'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Marketing Digital',
                'description' => 'Apprenez à développer une stratégie marketing sur Internet.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Réseaux Sociaux',
                'description' => 'Apprenez à créer et gérer une présence efficace sur les réseaux sociaux.',
                'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Entrepreneuriat',
                'description' => 'Découvrez les bases pour créer et développer votre propre entreprise.',
                'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Gestion de Projet',
                'description' => 'Apprenez à organiser, planifier et gérer efficacement vos projets.',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Comptabilité',
                'description' => 'Comprenez les principes fondamentaux de la comptabilité.',
                'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Bureautique',
                'description' => 'Maîtrisez les outils essentiels pour votre travail quotidien.',
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Microsoft Excel',
                'description' => 'Apprenez à utiliser Excel pour les calculs, tableaux et analyses.',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Base de Données',
                'description' => 'Découvrez SQL et les principes de conception des bases de données.',
                'image' => 'https://images.unsplash.com/photo-1544383835-bda2bc66a55d?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'Git & GitHub',
                'description' => 'Apprenez à gérer vos projets et collaborer avec Git et GitHub.',
                'image' => 'https://images.unsplash.com/photo-1556075798-4825dfaaf498?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'title' => 'DevOps',
                'description' => 'Découvrez les outils et pratiques pour automatiser le développement.',
                'image' => 'https://images.unsplash.com/photo-1667372393119-3d4c48d07fc9?auto=format&fit=crop&w=800&q=80',
            ],
        ];

        foreach ($categoriesData as $categ) {
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

    public static function getGroups(): array
    {
        return ['category'];
    }
}
