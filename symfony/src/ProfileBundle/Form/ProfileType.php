<?php

namespace ProfileBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('streetNumber')
            ->add('street')
            ->add('city')
            ->add('country')
            ->add('dob')
            ->add('relationshipStatus')
            ->add('hometown')
            ->add('gender')
            ->add('religion')
            ->add('description')
            ->add('mobileNumber')
            ->add('homePhone')
            ->add('school')
            ->add('higherEducation')
            ->add('blog')
            ->add('linkedin')
            ->add('favoriteSport')
            ->add('favoriteFilm')
            ->add('favoriteBook')
            ->add('favoriteFood')
            ->add('favoriteSong')
            ->add('favoriteDrink')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProfileBundle\Entity\Profile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'profilebundle_profile';
    }
}
