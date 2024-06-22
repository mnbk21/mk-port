<?php
function add_files() {
    //css読み込み
    wp_enqueue_style('main-style' , get_stylesheet_uri());
    //JS読み込み
    wp_enqueue_script('main-script', get_theme_file_uri().'/js/contents.js', array(), '', true);
}
add_action('wp_enqueue_scripts' , 'add_files');

function theme_setup() {
    //タイトルタグ
    add_theme_support('title-tag');

    //アイキャッチ画像設定エディターをON
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


// サブタイトル(WP Subtitle)
function wpqw_custompost_subtitle_support() {
	add_post_type_support( 'responsive', 'wps_subtitle' );
}
add_action( 'init', 'wpqw_custompost_subtitle_support' );


//サムネイル画像のタグに入るwidth/heightを削除
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
 
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//画像に追加されるwidth属性とheight属性を削除する
add_filter( 'wp_img_tag_add_width_and_height_attr', '__return_false' );
//画像に追加されるsrcset属性とsizes属性を削除する
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );



//カスタム投稿の設定
add_action('init', 'create_post_type');


function create_post_type(){

    /*works*/
    // register_post_type('works', [ // 投稿タイプ名の定義
    //     'labels' => [
    //     'name' => 'ワークス', // 管理画面上で表示する投稿タイプ名
    //     'singular_name' => 'works', // カスタム投稿の識別名
    //     'add_new' => 'ワークス追加',
    //     'edit_item' => 'ワークスの編集',
    //     'view_item' => 'ワークスを表示',
    //     'search_items' => 'ワークスを検索',
    //     'not_found' => 'ワークスは見つかりませんでした。',
    //     'not_found_in_trash' => 'ゴミ箱にワークスはありませんでした。',
    //     ],
    //     'public' => true, // 投稿タイプをpublicにするか
    //     'has_archive' => true, // アーカイブ機能ON/OFF
    //     'menu_position' => 5, // 管理画面上での配置場所(投稿の下に配置)
    //     'show_in_rest' => true, // wordpress5.x系から出てきた新エディタ「Gutenberg」を有効にする
    //     'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields', 'comments', 'revisions'), // カスタム投稿で使用する項目を設定（タイトル、エディター、アイキャッチ）
    //    'taxonomies' => array('rental_cat', 'rental_tag', 'category', 'post_tag'), //使用するタクソノミーを指定（カテゴリー/category やタグ/post_tag も追加）
    //     'exclude_from_search' => false, // false 検索対象に含める
    // ]);



    /*レスポンシブサイト*/
    register_post_type('responsive', [ // 投稿タイプ名の定義
        'labels' => [
        'name' => 'レスポンシブサイト', // 管理画面上で表示する投稿タイプ名
        'singular_name' => 'responsive', // カスタム投稿の識別名
        'add_new' => '新規レスポンシブサイト追加',
        'edit_item' => 'レスポンシブサイトの編集',
        'view_item' => 'レスポンシブサイトを表示',
        'search_items' => 'レスポンシブサイトを検索',
        'not_found' => 'レスポンシブサイトは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にレスポンシブサイトはありませんでした。',
        ],
        'public' => true, // 投稿タイプをpublicにするか
        'has_archive' => true, // アーカイブ機能ON/OFF
        'menu_position' => 5, // 管理画面上での配置場所(投稿の下に配置)
        'show_in_rest' => true, // wordpress5.x系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields', 'comments', 'revisions'), // カスタム投稿で使用する項目を設定（タイトル、エディター、アイキャッチ）
        'taxonomies' => array('rental_cat', 'rental_tag', 'category', 'post_tag'), //使用するタクソノミーを指定（カテゴリー/category やタグ/post_tag も追加）
        'exclude_from_search' => false, // false 検索対象に含める
    ]);

    /*アニメーションLP*/
    register_post_type('animationLp', [ // 投稿タイプ名の定義
        'labels' => [
        'name' => 'アニメーションLP', // 管理画面上で表示する投稿タイプ名
        'singular_name' => 'animationLp', // カスタム投稿の識別名
        'add_new' => '新規アニメーションLP追加',
        'edit_item' => 'アニメーションLPの編集',
        'view_item' => 'アニメーションLPを表示',
        'search_items' => 'アニメーションLPを検索',
        'not_found' => 'アニメーションLPは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にアニメーションLPはありませんでした。',
        ],
        'public' => true, // 投稿タイプをpublicにするか
        'has_archive' => true, // アーカイブ機能ON/OFF
        'menu_position' => 5, // 管理画面上での配置場所(投稿の下に配置)
        'show_in_rest' => true, // wordpress5.x系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields', 'comments', 'revisions'), // カスタム投稿で使用する項目を設定（タイトル、エディター、アイキャッチ）
        'taxonomies' => array('rental_cat', 'rental_tag', 'category', 'post_tag'), //使用するタクソノミーを指定（カテゴリー/category やタグ/post_tag も追加）
        'exclude_from_search' => false, // false 検索対象に含める
    ]);

    /*LPデザイン*/
    register_post_type('lpDesign', [ // 投稿タイプ名の定義
        'labels' => [
        'name' => 'LPデザイン', // 管理画面上で表示する投稿タイプ名
        'singular_name' => 'lpDesign', // カスタム投稿の識別名
        'add_new' => '新規LPデザイン追加',
        'edit_item' => 'LPデザインの編集',
        'view_item' => 'LPデザインを表示',
        'search_items' => 'LPデザインを検索',
        'not_found' => 'LPデザインは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にLPデザインはありませんでした。',
        ],
        'public' => true, // 投稿タイプをpublicにするか
        'has_archive' => true, // アーカイブ機能ON/OFF
        'menu_position' => 5, // 管理画面上での配置場所(投稿の下に配置)
        'show_in_rest' => true, // wordpress5.x系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields', 'comments', 'revisions'), // カスタム投稿で使用する項目を設定（タイトル、エディター、アイキャッチ）
        'taxonomies' => array('rental_cat', 'rental_tag', 'category', 'post_tag'), //使用するタクソノミーを指定（カテゴリー/category やタグ/post_tag も追加）
        'exclude_from_search' => false, // false 検索対象に含める
    ]);

    /*人物加工*/
    register_post_type('retouch', [ // 投稿タイプ名の定義
        'labels' => [
        'name' => '人物加工', // 管理画面上で表示する投稿タイプ名
        'singular_name' => 'retouch', // カスタム投稿の識別名
        'add_new' => '新規人物加工追加',
        'edit_item' => '人物加工の編集',
        'view_item' => '人物加工を表示',
        'search_items' => '人物加工を検索',
        'not_found' => '人物加工は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に人物加工はありませんでした。',
        ],
        'public' => true, // 投稿タイプをpublicにするか
        'has_archive' => true, // アーカイブ機能ON/OFF
        'menu_position' => 5, // 管理画面上での配置場所(投稿の下に配置)
        'show_in_rest' => true, // wordpress5.x系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields', 'comments', 'revisions'), // カスタム投稿で使用する項目を設定（タイトル、エディター、アイキャッチ）
        'taxonomies' => array('rental_cat', 'rental_tag', 'category', 'post_tag'), //使用するタクソノミーを指定（カテゴリー/category やタグ/post_tag も追加）
        'exclude_from_search' => false, // false 検索対象に含める
    ]);

    /*動画編集、BGM制作*/
    register_post_type('movieAndMusic', [ // 投稿タイプ名の定義
        'labels' => [
        'name' => '動画編集、BGM制作', // 管理画面上で表示する投稿タイプ名
        'singular_name' => 'movieAndMusic', // カスタム投稿の識別名
        'add_new' => '新規動画編集、BGM制作追加',
        'edit_item' => '動画編集、BGM制作の編集',
        'view_item' => '動画編集、BGM制作を表示',
        'search_items' => '動画編集、BGM制作を検索',
        'not_found' => '動画編集、BGM制作は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に動画編集、BGM制作はありませんでした。',
        ],
        'public' => true, // 投稿タイプをpublicにするか
        'has_archive' => true, // アーカイブ機能ON/OFF
        'menu_position' => 5, // 管理画面上での配置場所(投稿の下に配置)
        'show_in_rest' => true, // wordpress5.x系から出てきた新エディタ「Gutenberg」を有効にする
        'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields', 'comments', 'revisions'), // カスタム投稿で使用する項目を設定（タイトル、エディター、アイキャッチ）
        'taxonomies' => array('rental_cat', 'rental_tag', 'category', 'post_tag'), //使用するタクソノミーを指定（カテゴリー/category やタグ/post_tag も追加）
        'exclude_from_search' => false, // false 検索対象に含める
    ]);




}

// //記事内の最初の画像を取得
function first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
    if(empty($first_img)){
      $first_img = '';
    }
    return $first_img;
}

//記事内の二枚目の画像を取得
function second_image() {
    global $post, $posts;
    $second_img = '';
    ob_start();
    ob_end_clean();
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $second_img = $matches[1][1];
    if(empty($second_img)){
      $second_img = '';
    }
    return $second_img;
}

//記事内の三枚目の画像を取得
function third_image() {
    global $post, $posts;
    $third_img = '';
    ob_start();
    ob_end_clean();
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $third_img = $matches[1][2];
    if(empty($third_img)){
      $third_img = '';
    }
    return $third_img;
}




    //サイト内検索のカスタマイズ
    function custom_search($search, $wp_query) {
        global $wpdb;

        //検索ページ以外だったら終了
        if (!$wp_query->is_search)
        return $search;

        if (!isset($wp_query->query_vars))
        return $search;

        // タグ名・カテゴリ名・カスタムフィールド も検索対象にする
        $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
        if ( count($search_words) > 0 ) {
            $search = '';
            foreach ( $search_words as $word ) {
                if ( !empty($word) ) {
                    $search_word = $wpdb->escape("%{$word}%");
                    $search .= " AND (
                            {$wpdb->posts}.post_title LIKE '{$search_word}'
                            OR {$wpdb->posts}.post_content LIKE '{$search_word}'
                            OR {$wpdb->posts}.ID IN (
                                SELECT distinct r.object_id
                                FROM {$wpdb->term_relationships} AS r
                                INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
                                INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
                                WHERE t.name LIKE '{$search_word}'
                            OR t.slug LIKE '{$search_word}'
                            OR tt.description LIKE '{$search_word}'
                            )
                            OR {$wpdb->posts}.ID IN (
                                SELECT distinct p.post_id
                                FROM {$wpdb->postmeta} AS p
                                WHERE p.meta_value LIKE '{$search_word}'
                            )
                    ) ";
                }
            }
        }

        return $search;
    }
    add_filter('posts_search','custom_search', 10, 2);

    /* 2560pxを超える画像もフルサイズで */
    add_filter('big_image_size_threshold', '__return_false');

    //WordPress5.5以降の画像遅延読み込みを無効化
    add_filter( 'wp_lazy_loading_enabled', '__return_false' );


?>









