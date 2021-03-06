<?php

namespace CDNServer\Core\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('userGroup', 'entity', array(
                'class' => 'CDNServerCore:UserGroup',
                'placeholder' => false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CDNServer\Core\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cdnserver_corebundle_project';
    }
}
