<?php

namespace App\Form;

use App\Entity\Pages;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                -> add('publish', ButtonType::class, [
                    'attr' =>[
                        'class'=>'btn btn-primary mr-3 pull-left'
                    ],
                    'label' => 'Save Page'
                ])

                ->add('page_name', TextType::class, [
                        'attr' =>[
                            'class'=> 'form-control'
                        ],
                        'label' => 'Page Name'
                ])  

                ->add('page_title', TextType::class, [
                        'attr' =>[
                            'class'=> 'form-control'
                        ],
                        'label' => 'Page Title'
                ])

                ->add('page_description', TextType::class, [
                        'attr' =>[
                            'class'=> 'form-control'
                        ],
                        'label' => 'Page Description'
                ])

                ->add('topBar', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Top Bar',
                    'choices' =>[
                        'ON' => 0,
                        'OFF' => 1
                    ]
                ])
                ->add('topBarColor', ColorType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Top Bar Color'
                ])
                ->add('topBarSize', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Top Bar Size',
                    'choices' =>[
                        'SMALL' => 'topbar-small',
                        'MEDIUM' => 'topbar-medium',
                        'LARGE' => 'topbar-large'
                    ]
                ])
                
                 ->add('navFont', TextType::class, [
                     'attr' => ['class'=>'form-control'],
                     'label' => 'Menu Font'
                 ])
                 ->add('navColor', ColorType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Menu Color'
                ])
                 ->add('navFontColor', ColorType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Menu Font Color'
                ])
                 ->add('navFontSize', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Menu Font Size',
                    'choices' =>[
                        'SMALL' => 'small-font',
                        'MEDIUM' => 'medium-font',
                        'LARGE' => 'large-font'
                    ]
                ])
                 ->add('mobileMenuBold', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Mobile Menu Bold',
                    'choices' =>[
                        'YES' => 'yes',
                        'NO' => 'no'
                    ]
                ])

                 ->add('default_nav_bar_size', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Menu Size',
                    'choices' =>[
                        'NO BAR' => 'no-bar',
                        'SMALL BAR' => 'small-bar',
                        'BIG BAR' => 'big-bar'
                    ]
                ])
                 ->add('leftAlign', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Menu Alignment',
                    'choices' =>[
                        'Far Left & Right' => 'far-left-and-right',
                        'Fixed Left & Right' => 'exact-left'
                    ]
                ])
                 ->add('menPosition', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Menu Position',
                    'choices' =>[
                        'LEFT JUSTIFIED' => 'left-justified',
                        'CENTER JUSTIFIED' => 'center-justified',
                        'RIGHT JUSTIFIED' => 'right-justified'
                    ]
                ])
                 ->add('menuVertical', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Menu Vertical',
                    'choices' =>[
                        'HIGH' => 'high-nav',
                        'MIDDLE' => 'mid-nav',
                        'LOW' => 'low-nav'
                    ]
                ])
                 ->add('mobileLogoMenuCentered', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Mobile Logo & Menu Centered',
                    'choices' =>[
                        'YES' => 'yes',
                        'NO' => 'no'
                    ]
                ])

                 ->add('logoVersion', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Logo Version',
                    'choices' =>[
                        'WHITE LOGO' => 'white',
                        'BLACK LOGO' => 'black',
                        'TEXT LOGO' => 'text'
                    ]
                ])
                 ->add('logoPositionVertical', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Logo Vertical',
                    'choices' =>[
                        'HIGH' => 'above-nav',
                        'MIDDLE' => 'same-as-nav',
                        'LOW' => 'below-nav'
                    ]
                ])
                 ->add('logoPosition', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Logo Horizontal',
                    'choices' =>[
                        'LEFT' => 'left-post',
                        'CENTER' => 'center-post',
                        'RIGHT' => 'right-post'
                    ]
                ])
                 ->add('logoLocation', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Logo Location',
                    'choices' =>[
                        'Logo Inside Menu Bar' => 'inside-menu',
                        'Logo Outside Menu Bar' => 'outside-menu'
                    ]
                ])
                 ->add('logoTextColor', ColorType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Logo Text Color'
                ])
                 ->add('logoSize', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Logo Size',
                    'choices' =>[
                        '1' => 'logo-sm',
                        '2' => 'logo-md',
                        '3' => 'logo-lg',
                        '4' => 'logo-xl',
                        '5' => 'logo-xxl'
                    ]
                ])

                ->add('bgcolor', TextType::class,[
                    'attr'=>['class'=>'form-control'],
                    'label' => 'Master Background Color'
                ])
                ->add('colorBetween', TextType::class,[
                    'attr'=>['class'=>'form-control'],
                    'label' => 'Color Between Photos'
                ])
                ->add('sideColor', ColorType::class,[
                    'attr'=>['class'=>'form-control'],
                    'label' => 'Left Side Color'
                ])
                ->add('rsideColor', ColorType::class,[
                    'attr'=>['class'=>'form-control'],
                    'label' => 'Right Side Color'
                ])
                ->add('sidesOption', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Logo Size',
                    'choices' =>[
                        'DISABLED' => '0',
                        'ENABLED' => '1',
                    ]
                ])

                ->add('dofilters', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Filter',
                    'choices' =>[
                        'NO' => '0',
                        'YES' => '1',
                    ]
                ])
                ->add('useicon', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Display',
                    'choices' =>[
                        'Movies & Picture Options' => '0',
                        'Filter Icon' => '1',
                    ]
                ])

                 ->add('rowTopMargin', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Space Above First Row',
                    'choices' =>[
                        'SMALL' => 'top-small',
                        'MEDIUM' => 'top-medium',
                        'LARGE' => 'top-large'
                    ]
                ])
                 ->add('rowLeftMargin', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Left Side Space',
                    'choices' =>[
                        'SMALL' => 'top-small',
                        'MEDIUM' => 'top-medium',
                        'LARGE' => 'top-large'
                    ]
                ])
                 ->add('rowRightMargin', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Right Side Space',
                    'choices' =>[
                        'SMALL' => 'top-small',
                        'MEDIUM' => 'top-medium',
                        'LARGE' => 'top-large'
                    ]
                ])
                 ->add('topRowColor', ColorType::class,[
                    'attr'=>['class'=>'form-control'],
                    'label' => 'First Row Top Color'
                ])
                 ->add('LeftColor', ColorType::class,[
                    'attr'=>['class'=>'form-control'],
                    'label' => 'Left Side Space Color'
                ])
                 ->add('RightColor', ColorType::class,[
                    'attr'=>['class'=>'form-control'],
                    'label' => 'Right Side Space Color'
                ])

                 ->add('fbPage', TextType::class, [
                     'attr' => ['class'=>'form-control'],
                     'label' => 'Facebook Profile'
                 ])
                 ->add('twitterPage', TextType::class, [
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Twitter Profile'
                ])
                 ->add('instaPage', TextType::class, [
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Instagram Profile'
                ])
                 ->add('ytPage', TextType::class, [
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Youtube Channel'
                ])
                 ->add('pinPage', TextType::class, [
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Pinterest Profile'
                ])
                
                 ->add('showFbOnTop', CheckboxType::class, [
                     'attr' => ['class'=>'form-checkbox'],
                     'label' =>false
                 ])
                 ->add('showTwitterOnTop', CheckboxType::class, [
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                 ->add('showInstaOnTop', CheckboxType::class, [
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                 ->add('showYtOnTop', CheckboxType::class, [
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                 ->add('showPinOnTop', CheckboxType::class, [
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])

                 ->add('toggleSocialIcons', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Social Icons',
                    'choices' =>[
                        'OFF' => '0',
                        'ON' => '1'
                    ]
                ])
                 ->add('socialShowIn', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Show In',
                    'choices' =>[
                        'HEADER' => '1',
                        'TOP BAR' => '2',
                        'MENU BAR' => '3'
                    ]
                ])
                 ->add('socialSize', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Icon Size',
                    'choices' =>[
                        '1' => 'icon-sm',
                        '2' => 'icon-md',
                        '3' => 'icon-lg',
                        '4' => 'icon-xl',
                        '5' => 'icon-xxl'
                    ]
                ])
                 ->add('socialLocation', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Icon Position',
                    'choices' =>[
                        'LEFT' => 'social-left',
                        'CENTER' => 'social-center',
                        'RIGHT' => 'social-right'
                    ]
                ])
                 ->add('socialPosition', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Icon Vertical',
                    'choices' =>[
                        'HIGH' => 'social-high',
                        'MIDDLE' => 'social-middle',
                        'LOW' => 'social-low'
                    ]
                ])

                ->add('footer_size', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Footer Height',
                    'choices' =>[
                        '1' => 'footer-sm',
                        '2' => 'footer-md',
                        '3' => 'footer-lg',
                        '4' => 'footer-xl',
                        '5' => 'footer-xxl',
                        '6' => 'footer-xxxl',
                        '7' => 'footer-xxxxl',
                        '8' => 'footer-xxxxxl',
                        '9' => 'footer-xxxxxxl',
                        '10' => 'footer-xxxxxxxl',
                    ]
                ])
                ->add('footer_color', ColorType::class,[
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Footer Color'
                ])
                
                ->add('footer_icon_size', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Footer Icon Size',
                    'choices' =>[
                        '1' => 'footer-icon-sm',
                        '2' => 'footer-icon-md',
                        '3' => 'footer-icon-lg',
                        '4' => 'footer-icon-xl',
                        '5' => 'footer-icon-xxl'
                         
                    ]
                ])
                ->add('footer_social_pos', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Footer Icon Position',
                    'choices' =>[
                        'LEFT' => 'footer-social-left',
                        'CENTER' => 'footer-social-center',
                        'RIGHT' => 'footer-social-right'
                         
                    ]
                ])
                ->add('footer_social_vert', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Footer Icon Verical',
                    'choices' =>[
                        'HIGH' => 'footer-social-high',
                        'MIDDLE' => 'footer-social-middle',
                        'LOW' => 'footer-social-low'
                         
                    ]
                ])
                
                ->add('showFbOnFoot', CheckboxType::class,[
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                ->add('showTwitterOnFoot', CheckboxType::class,[
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                ->add('showInstaOnFoot', CheckboxType::class,[
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                ->add('showYtOnFoot', CheckboxType::class,[
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                ->add('showPinOnFoot', CheckboxType::class,[
                    'attr' => ['class'=>'form-checkbox'],
                    'label' =>false
                ])
                
                ->add('show_header', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Header Photo',
                    'choices' =>[
                        'YES' => 'yes',
                        'NO' => 'no' 
                         
                    ]
                ])
                ->add('headerWidth', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Header Width',
                    'choices' =>[
                        'Full Width' => 'full-width',
                        'Edge-to-edge' => 'edged'
                         
                    ]
                ])
                ->add('headerHeight', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Header Height',
                    'choices' =>[
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10',
                        '11' => '11',
                        '12' => '12',
                        '13' => '13',
                        '14' => '14',
                        '15' => '15',
                        '16' => '16',
                        '17' => '17',
                        '18' => '18',
                        '19' => '19',
                        '20' => '20' 
                    ]
                ])

                ->add('header_text', TextType::class, [
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Header Slogan'
                ])
                ->add('sloganPosition', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Slogan Position',
                    'choices' =>[
                        'LEFT' => 'slogan-left',
                        'CENTER' => 'slogan-center',
                        'RIGHT' => 'slogan-right'
                         
                    ]
                ])
                ->add('sloganColor', ColorType::class, [
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Slogan Color'
                ])
                ->add('sloganFont', TextType::class,[
                    'attr' => ['class'=>'form-control'],
                    'label' => 'Slogan Font'
                ])
                 ->add('slogansize', ChoiceType::class, [
                    'attr' => ['class' => 'form-control'],
                    'label' => 'Slogan Font Size',
                    'choices' =>[
                        'SMALL' => 'slogan-small',
                        'MEDIUM' => 'slogan-medium',
                        'LARGE' => 'slogan-large'
                         
                    ]
                ])

                ->add('photoid', HiddenType::class)


            // ->add('datecreated')
            // ->add('dateupdated')
            
            
            // ->add('is_published')
            // ->add('menu_order')
            // ->add('photoid')
           
            
            // ->add('switch')
            // ->add('rightAlign')
            // ->add('default_nav_bar_size')
            // 
            
            // 
            // 
            // ->add('croppedPhoto')
            
            
            // ->add('position_x')
            // ->add('position_y')
            // ->add('image_x')
            // ->add('image_h')
            // ->add('position_x2')
            // ->add('position_y2')
            // ->add('has_header_photo')
            // 
            // 
          
            // 
            // 
            
            
            
            // ->add('logoBarColor')
            // 
            // 
            // 
            // 
            // 
            // 
            
            // ->add('custom_fb_icon_header')
            // ->add('custom_twitter_icon_header')
            // ->add('custom_instagram_icon_header')
            // ->add('custom_youtube_icon_header')
            // ->add('custom_pinterest_icon_header')
           
            
           
            

            // ->add('footer_icons')

            // ->add('icon_set_up')
            // ->add('icon_set_top')
            // ->add('icon_color_top')
            // ->add('icon_set_footer')
            // ->add('icon_color_footer')
            // ->add('custom_fb_icon_footer')
            // ->add('custom_twitter_icon_footer')
            // ->add('custom_instagram_icon_footer')
            // ->add('custom_youtube_icon_footer')
            // ->add('custom_pinterest_icon_footer')
            // ->add('fb_icon_header')
            // ->add('twitter_icon_header')
            // ->add('instagram_icon_header')
            // ->add('youtube_icon_header')
            // ->add('pinterest_icon_header')
            // ->add('fb_icon_footer')
            // ->add('twitter_icon_footer')
            // ->add('instagram_icon_footer')
            // ->add('youtube_icon_footer')
            // ->add('pinterest_icon_footer')
            // ->add('fb_icon_color_header')
            // ->add('twitter_icon_color_header')
            // ->add('instagram_icon_color_header')
            // ->add('youtube_icon_color_header')
            // ->add('pinterest_icon_color_header')
            // ->add('fb_icon_color_footer')
            // ->add('twitter_icon_color_footer')
            // ->add('instagram_icon_color_footer')
            // ->add('youtube_icon_color_footer')
            // ->add('pinterest_icon_color_footer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pages::class,
        ]);
    }
}
