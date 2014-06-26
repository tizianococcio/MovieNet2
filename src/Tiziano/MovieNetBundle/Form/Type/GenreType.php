<?php
// src/Tiziano/MovieNetBundle/Form/Type/DirectorType.php
namespace Tiziano\MovieNetBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GenreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('salva', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tiziano\MovieNetBundle\Entity\Genre',
        ));
    }

    public function getName()
    {
        return 'genre';
    }
}