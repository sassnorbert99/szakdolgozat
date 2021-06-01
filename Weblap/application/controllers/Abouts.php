<?php
	class Abouts extends CI_Controller{
		public function __construct(){
        		parent::__construct();
        		$this->load->model('About_model');
    		}
		public function index(){
			if(!empty($_POST["send"])) {
			    $name = $_POST["userName"];
			    $email = $_POST["userEmail"];
			    $subject = $_POST["subject"];
			    $content = $_POST["content"];

			    $conn = mysqli_connect("89.40.126.232:8080", "varazstorony", "VarazsTorony_18", "varazstorony") or die("Connection Error: " . mysqli_error($conn));
			    mysqli_query($conn, "INSERT INTO contact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
			    $insert_id = mysqli_insert_id($conn);
			    //if(!empty($insert_id)) {
			       $message = "Your contact information is saved successfully.";
			       $type = "success";
			   }
			}
