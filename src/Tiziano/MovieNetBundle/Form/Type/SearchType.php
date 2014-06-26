<?php
// src/Tiziano/MovieNetBundle/Form/Type/SearchType.php
namespace Tiziano\MovieNetBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('termine')
            ->add('cerca', 'submit');
    }

    public function getName()
    {
        return 'search';
    }
}