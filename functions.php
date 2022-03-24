<?php

////////////////////////////////
// getの値を追加
////////////////////////////////

function add_query_vars_filter( $vars ){
  $vars[] = "foo";
//   $vars[] = "bar";
//   $vars[] = "baz";
//   $vars[] = "qux";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );


////////////////////////////////
// アーカイブページにクエリを追加
////////////////////////////////
add_action( 'pre_get_posts', 'add_archive_custom_query' ); // pre_get_postsにフック


// フック時に使う関数
function add_archive_custom_query( $query ) {
  if ( ! is_admin() && $query->is_main_query() && is_post_type_archive('story') ) {

    // GETの引数を取得
    $get_foo = get_query_var('foo');
//     $get_bar = get_query_var('bar');
//     $get_buz = get_query_var('buz');
//     $get_qux = get_query_var('qux');
    

    // 全文検索
    if(!empty($get_foo)) {
      $query->set('s', $get_foo);
    }

    // meta_query を追加

    $meta_query = array(
      'relation' => 'AND'
    );
    // セレクトボックス
//     if(!empty($get_bar)) {
//       array_push($meta_query, array(
//         'key' => 'bar', // metaキー
//         'value' => $get_bar, // 検索値
//         'compare' => '=' // 一致
//       ));
//     }


    $query->set('meta_query', $meta_query);
	  
    // 検索やmeta_query以外にも、authorやカスタム投稿タイプ、カテゴリー、タクソノミーなど
    // WP_Queryの各種パラメーターが使えます
    // その他のクエリパラメータは以下参照下さい
    // http://notnil-creative.com/blog/archives/1288

  }
}
?>