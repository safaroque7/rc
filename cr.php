$wp_customize->add_section('npa_all_category_names_section', array(
        'title'         => __('Select Category', 'npa'),
        'description'   => 'You can select category name from here'
    ));

    // ======================= 1 No category start // =======================
    $categories = get_categories();
    $cats = array();
    $i = 0;

    foreach ($categories as $category) {
        if ($i == 0) {
            $npa_cat_default_1 = $category->name;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }
    $wp_customize->add_setting('npa_cat_id_1', array( //changable last number
        'default' => $npa_cat_default_1
    ));
    $wp_customize->add_control('npa_all_category_names_section', array(
        'label'         => __('1 No. Category', 'npa'),
        'settings'      => 'npa_cat_id_1', //changable last number
        'section'       => 'npa_all_category_names_section',
        'type'          => 'select',
        'choices'       => $cats,
    ));