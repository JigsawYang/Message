// <?php
// require_once '../include.php';

// $sql = "select * from user_msg";
// $total_rows = get_result_num($sql);
// // echo $total_rows;
// $page_size = 3;
// //总页码
// $total_pages = ceil($total_rows / $page_size);
// $page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
// if($page < 1 || $page == null || !is_numeric($page)) {
// 	$page = 1;
// }
// if($page >= $total_pages) {
// 	$page = $total_pages;
// }
// $offset = ($page - 1) * $page_size;

// $sql = "select * from user_msg limit {$offset}, {$page_size}";
// $rows = fetch_all($sql);
