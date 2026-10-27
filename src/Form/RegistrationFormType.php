<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'attr' => [
                    'class' => 'w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder-gray-400 transition hover:border-gray-300 focus:border-brand focus:outline-none focus:ring-4 focus:ring-brand/20',
                    'placeholder' => "Votre prénom"
                ]
            ])
            ->add('lastname',TextType::class, [
                'attr' => [
                    'class' => 'w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder-gray-400 transition hover:border-gray-300 focus:border-brand focus:outline-none focus:ring-4 focus:ring-brand/20',
                    'placeholder' => "Votre nom"
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder-gray-400 transition hover:border-gray-300 focus:border-brand focus:outline-none focus:ring-4 focus:ring-brand/20',
                    'placeholder' => "votre@email.com"
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => false,
                'mapped' => false,
                'constraints' => [
                    new IsTrue(
                        message: 'You should agree to our terms.',
                    ),
                ],
            ])
            ->add('plainPassword',RepeatedType::class, [
                               
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Password',
                    'attr' => [
                        'class' => 'w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder-gray-400 transition hover:border-gray-300 focus:border-brand focus:outline-none focus:ring-4 focus:ring-brand/20',
                        'placeholder' => "••••••••"
                    ]
                ],
                'second_options' => [
                    'label' => 'confirmation',
                    'attr' => [
                        'class' => 'w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder-gray-400 transition hover:border-gray-300 focus:border-brand focus:outline-none focus:ring-4 focus:ring-brand/20',
                        'placeholder' => "••••••••"
                    ]
                ],
                'invalid_message' => 'The password fields must match',
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank(
                        message: 'Please enter a password',
                    ),
                    new Length(
                        min: 6,
                        minMessage: 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        max: 4096,
                    ),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
