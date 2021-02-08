<?php
# 子テーマの読み込み
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

# カスタム投稿タイプ(single-)の登録
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('news', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'お知らせ', // 管理画面上で表示する名称
            'singular_name' => 'news',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプ
        'has_archive'   => true,  // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => false,  // Gutenbergエディタを有効
    ]);
}
