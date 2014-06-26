<?php
// src/Tiziano/MovieNetBundle/Form/Type/MovieType.php
namespace Tiziano\MovieNetBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $entity_regista  = array(
            'class' => 'TizianoMovieNetBundle:Director',
            'query_builder' => function($repository) {
                return $repository->createQueryBuilder('p')->orderBy('p.name');
            },
            'property' => 'name'
        );

        $entity_genere = array(
            'class' => 'TizianoMovieNetBundle:Genre',
            'query_builder' => function($repository) {
                return $repository->createQueryBuilder('p');    
            },
            'property' => 'name'
        );

        $builder
            ->add('regista', 'entity', $entity_regista)
            ->add('genere', 'entity', $entity_genere)        
            ->add('titolo', 'text')
            ->add('durata', 'text')
            ->add('supporto', 'text')
            ->add('salva', 'submit');
    }


    public function getName()
    {
        return 'movie';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tiziano\MovieNetBundle\Entity\Movie',
        ));
    }    
    
}