<?php

/**
 * 连接数据库
 * @return resource
 */
function connect() {
	$link = mysql_connect(DB_HOST, DB_USER, DB_PWD) or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
	mysql_set_charset(DB_DBNAME);
	mysql_select_db(DB_DBNAME) or die("指定数据库打开失败");
	return $link;
}

/**
 * 完成插入操作
 * @param string $table
 * @param array $array
 * @return number
 */
function insert($table, $array) {
	$keys = join(",", array_keys($array));
	$vals = "'".join("','", array_values($array))."'";
	$sql = "insert into {$table} ($keys) values({$vals})";
	mysql_query($sql);
	return mysql_insert_id();
}

/**
 * 更新数据数据
 * @param string $table
 * @param array $array
 * @param string $where
 * @return number
 */
function update($table, $array, $where = null) {
	$str = "";
	foreach ($array as $key => $val) {
		if($str == null) {
			$sep = "";
		} else {
			$sep = ",";
		}
		$str .= $sep.$key."='".$val."'";
	}
	$sql = "update {$table} set {$str}".($where == null ? null : "where".$where);
	mysql_query($sql);
	return mysql_affected_rows();
}
/**
 * 删除记录
 * @param string $table
 * @param string $where
 * @return number
 */
function delete($table, $where = null) {
	$where = ($where == null) ? null : "where".$where;
	$sql = "delete from {$table} {$where}";
	mysql_query($sql);
	return mysql_affected_rows();
}

function fetch_one($sql, $result_type = MYSQL_ASSOC) {
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result, $result_type);
	return $row;
}

function fetch_all($sql, $result_type = MYSQL_ASSOC) {
	$result = mysql_query($sql);
	while (@$row = mysql_fetch_array($result, $result_type)) {
		$rows[] = $row;
	}
	return $rows;
}

function get_result_num($sql) {
	$result = mysql_query($sql);
	return mysql_num_rows($result);
}












