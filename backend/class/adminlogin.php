<?php
	include ('lib/session.php');
	Session::checkLogin(); // gọi hàm check login để ktra session
	include ('lib/database.php');
	include ('helpers/format.php');
?>

<?php 
	class adminlogin
	{
		private $db; //khao bao 2 biến riêng tu chỉ dc ở trang này
		private $fm;
		public function __construct()
		{
			$this->db = new Database(); //chạy trong trang này thôi   -- lấy class database và format
			$this->fm = new Format();
		}
		public function login_admin($adminUser,$adminPass){
			$adminUser = $this->fm->validation($adminUser); //gọi ham validation từ file Format để ktra xem có chứa cái gì k hợp lệ k
			$adminPass = $this->fm->validation($adminPass); // fm là format luôn

			$adminUser = mysqli_real_escape_string($this->db->link, $adminUser); //kết nối csdl
			$adminPass = mysqli_real_escape_string($this->db->link, $adminPass); //mysqli gọi 2 biến. (adminUser and link) biến link -> gọi conect db từ file db
			
			if(empty($adminUser) || empty($adminPass)){ // empty = trống
				$alert = "Tài Khoản or Mật Khẩu chưa nhập";
				return $alert;
			}else{
				$query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1 ";
				//chọn tất cả từ bảng admin điều kiện user = biến adminuser  pass=pass chỉ lấy 1 đk đúng
				$result = $this->db->select($query); // kết quả = chọn query

				if($result != false){  // nếu đúng
					$value = $result->fetch_assoc();// lấy kq result truyền cho value
					Session::set('adminlogin', true); // set adminlogin đã tồn tại
					// gọi function Checklogin để kiểm tra true.
					Session::set('adminId', $value['adminId']);  
					Session::set('adminUser', $value['adminUser']);
					Session::set('adminName', $value['adminName']);
					header("Location:index.php");
				}else {
					$alert = "Tài Khoản or Mật Khẩu không chính xác";
					return $alert;
				}
			}
		}	
	}
?>