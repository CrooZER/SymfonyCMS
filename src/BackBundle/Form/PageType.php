<?php

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('alias','text')
            ->add('title')
            ->add('title', 'a2lix_translations')
            ->add('text','textarea',['attr' => ['class'=>'tinymce']])
            ->add('active' , 'checkbox', array('required' => 'false', 'mapped' => 'false'))
            ->add('archive', 'checkbox', array('required' => 'false', 'mapped' => 'false'));
        $builder->add('translations', 'a2lix_translations', array(
            'locales' => array('fr', 'es', 'de'),   // [1]
            'required_locales' => array('fr'),      // [2]
            'fields' => array(                      // [3]
                'title' => array(                   // [3.a]
                    'field_type' => 'textarea',                 // [4]
                    'label' => 'descript.',                     // [4]
                    'locale_options' => array(            // [3.b]
                        'es' => array(
                            'label' => 'descripción'            // [4]
                        ),
                        'fr' => array(
                            'display' => false                  // [4]
                        )
                    )
                )
            )
        ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Page'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backbundle_page';
    }
}
