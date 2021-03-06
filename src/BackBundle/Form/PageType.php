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
            /*->add('object', 'a2lix_translations', array(
                'locales' => array('en', 'ua'),   // [1]
                'required_locales' => array('en'),      // [2]
                'fields' => array(                      // [3]
                    'title' => array(                   // [3.a]
                        'field_type' => 'text',                 // [4]
                        'label' => 'descript.',                     // [4]
                        )
                    ,
                    'text' => array(
                        'field_type' => 'textarea',
                        'attr' => [
                            'class' => 'tinymce'
                        ]
                    )
                )
            ))*/
            ->add('title','text')
            ->add('text','textarea')


            ->add('active' , 'checkbox', array('required' => 'false', 'mapped' => 'false'))
            ->add('archive', 'checkbox', array('required' => 'false', 'mapped' => 'false'));


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
