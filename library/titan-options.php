<?php
add_action('tf_create_options', 'billa');
function billa(){
    //Intialize Titan with special unique namespace
    $titan = TitanFramework::getInstance('lodse');
    //Create Admin Panel
    $panel = $titan->createAdminPanel(array(
        'name' => 'Lodse Options',
    ));
    
    //Creation options For 
    //$panel->createOption( array( Will show on every page
     //  'type' => 'save' 
    //));
    //Footer
    $tab1 = $panel->createTab(array( 'name' => 'Home',));
    $tab2 = $panel->createTab(array( 'name' => 'Footer',));
    
    $tab1->createOption( array(
    'type' => 'note',
    'desc' => 'Welcome to Lodse Theme Options. Configure your site here.'
    ) );
    $tab1->createOption( array(
    'name' => 'Author Information',
    'id' => 'authorinfo',
    'options' => array(
        '1' => 'Turn On',
        '2' => 'Turn Off',
        ),
    'type' => 'radio',
    'desc' => 'Select one',
    'default' => '1',
    ) );
    $tab1->createOption(array(
        'name' => 'Fav Icon',
        'id' => 'favicon',
        'type' => 'upload',
        'desc' => 'Upload your favicon here'
    ));
    $tab1->createOption(array(
        'name' => 'Apple Touch Icon 144x144',
        'id' => 'icon144',
        'type' => 'upload',
        'desc' => 'Upload your Apple Touch Icon here. Resolutions: 144x144'
    ));
    $tab1->createOption(array(
        'name' => 'Apple Touch Icon 114x114',
        'id' => 'icon114',
        'type' => 'upload',
        'desc' => 'Upload your Apple Touch Icon here. Resolutions: 114x114'
    ));
    $tab1->createOption(array(
        'name' => 'Apple Touch Icon 72x72',
        'id' => 'icon72',
        'type' => 'upload',
        'desc' => 'Upload your Apple Touch Icon here. Resolutions: 72x72'
    ));
    $tab1->createOption(array(
        'name' => 'Apple Touch Icon 57x57',
        'id' => 'icon57',
        'type' => 'upload',
        'desc' => 'Upload your Apple Touch Icon here. Resolutions: 57x57'
    ));

    

    $tab2->createOption(array(
        'name' => 'Footer',
        'id' => 'textfooter',
        'type' => 'text',
        'desc' => 'Enter your footer text For eg. 2015 Lodse.com'
    ));
    
    $tab2->createOption(array(
        'name' => 'Footer Logo',
        'id' => 'logofooter',
        'type' => 'upload',
        'desc' => 'Upload your footer logo here. Height:40px'
    ));
    
    $tab2->createOption( array(
    'name' => 'Facebook Page',
    'id' => 'fb',
    'type' => 'text',
    'default' => 'https://www.facebook.com/lodselive',
    'desc' => 'Set your Facebook page url here.'
    ) );
    
    $tab2->createOption( array(
    'name' => 'Twitter Page',
    'id' => 'twitter',
    'type' => 'text',
    'default' => 'https://twitter.com/lodsedotcom',
    'desc' => 'Set your Twitter page url here.'
    ) );
    
    $tab2->createOption( array(
    'name' => 'Google Plus Page',
    'id' => 'google',
    'type' => 'text',
    'default' => 'https://plus.google.com/+Lodse',
    'desc' => 'Set your Google Plus page url here.'
    ) );
    
    $tab2->createOption( array(
    'name' => 'Powered by Lodse Text',
    'id' => 'footertext1',
    'options' => array(
        '1' => 'Turn On',
        '2' => 'Turn Off',
    ),
    'type' => 'radio',
    'desc' => 'Select one',
    'default' => '2',
) );
    $tab2->createOption( array(
    'name' => 'Powered by WordPress Text',
    'id' => 'footertext2',
    'options' => array(
        '1' => 'Turn On',
        '2' => 'Turn Off',
    ),
    'type' => 'radio',
    'desc' => 'Select one',
    'default' => '2',
) );
    
    //Save Option
    $panel->createOption( array(
       'type' => 'save' 
    ));
    
}
?>