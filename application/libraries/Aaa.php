<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Aaa{
	function __construct(){
		$this->ci =& get_instance();
	}
	function loggedin(){
		//return 1;
	
		return (bool) $this->ci->session->userdata('loggedin');
	}
	
	
	
	function getUserId(){
		$userid=NULL;
		$userid = $this->ci->session->userdata('id');
		return $userid;
	}
	
	function login ($username,$password){
		
		$password =  $this->hash($password);
		
		$this->ci->db->select('*')->from('users')->where('username',$username)->where('password',$password);
		$query=$this->ci->db->get();
		$user=$query->row();	
		
		
			
		if ($user){
			$data = array(
				'name' => $user->name,
				'username' => $user->username,
				'id' => $user->id,
				'email' => $user->email,
				'loggedin' => TRUE,
			);
			
			$this->ci->session->set_userdata($data);
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	
	
		function loginUser ($username,$password){
		$password =  $this->hash($password);
		$this->ci->db->select('*')->from('authority')->where('username',$username)->where('password',$password);
		$query=$this->ci->db->get();
		$user=$query->row();		
		if ($user){
			$data = array(
				'name' => $user->auth_name,
				'username' => $user->username,
				'id' => $user->auth_id,
				
				'loggedin' => TRUE,
			);
			$this->ci->session->set_userdata($data);
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	
	
	function logout(){
		$this->ci->session->sess_destroy();
	}	
	function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}
	
	function getUser($id){
		$this->ci->db->select('*')->from('users')->where('id',$id);
		$query=$this->ci->db->get();
		$user=$query->row();
		return $user;
	}
	
		function getDoc($id)
		{
		$this->ci->db->select('*');
		$this->ci->db->from('client_doc');
		$this->ci->db->where('doc_id',$id);

		$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	}
	
		function getSingleAuth($id){
		$this->ci->db->select('*')->from('authority')->where('auth_id',$id);
		$query=$this->ci->db->get();
		$docs=$query->row();
		return $docs;
	}

	
	
	
		
	function getAutherClient($id){
		$this->ci->db->select('*');
		$this->ci->db->distinct();
		$this->ci->db->from('clients');
		$this->ci->db->from('auth_relation');
		$this->ci->db->where('clients.id = auth_relation.client_id AND auth_relation.auth_id ='.$this->ci->db->escape($id).' ');
		//$this->ci->db->where('auth_relation.auth_id',2);
		$query=$this->ci->db->get();
		$user=$query->result();
		return $user;
	}
		function getAuth($id){
		$this->ci->db->select('*')->from('authority')->where('auth_id',$id);
		$query=$this->ci->db->get();
		$user=$query->row();
		return $user;
	}
	
	function checkNewsSlug($slug,$id=NULL){
		if($id) $this->ci->db->where_not_in('id',$id);
		$this->ci->db->where('slug',$slug);
		$this->ci->db->select('*')->from('news');
		$query=$this->ci->db->get();
		$news=$query->row();
		return $news;
	}
	function getActivities(){
		$this->ci->db->select('*');
		$this->ci->db->from('activity');
		$this->ci->db->order_by('created');
		$query=$this->ci->db->get();
		$activity=$query->result();
		return $activity;
	
	}
	function getActivityImages($actid){
		$this->ci->db->select('*');
		$this->ci->db->from('act2img');
	
		$this->ci->db->where('actid',$actid);

		$query=$this->ci->db->get();
		$act=$query->result();
		return $act;
	
	}
		
	
	function getSingleActivity($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('activity');
	$this->ci->db->where('actid',$id);
	$query=$this->ci->db->get();
	$act=$query->row();
	//echo $this->ci->db->last_query();
	return $act;
	}	
	
	function getSingleImage($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('act2img');
	$this->ci->db->where('imgid',$id);
	$query=$this->ci->db->get();
	$img=$query->row();
	//echo $this->ci->db->last_query();
	return $img;
	}
		function deleteActivity($id){
		$this->ci->db->where('actid', $id);
		$this->ci->db->delete('activity');
	}	
	
	
		function getBranches(){
		$this->ci->db->select('*');
		$this->ci->db->from('branches');
		//$this->ci->db->order_by('pubdate','desc');
		$query=$this->ci->db->get();
		$branch=$query->result();
		return $branch;
	}
	function getAllImages(){
		$this->ci->db->select('*');
		$this->ci->db->from('act2img,activity');
		$this->ci->db->where('activity.actid = act2img.actid' );
		$query=$this->ci->db->get();
		$activity=$query->result();
		return $activity;
	}	
	 function getAllActImages($actid)
	{
		$this->ci->db->select('*');
		$this->ci->db->from('act2img');
		$this->ci->db->where('actid',$actid);
		$query=$this->ci->db->get();
		$activity=$query->result();
		return $activity;
	} 
	
	function deleteImage($id){
		$this->ci->db->where('imgid', $id);
		$this->ci->db->delete('act2img');
	}



	

	function getRecent(){
		$this->ci->db->select('*')->from('news')->where('pubdate <=', date('Y-m-d'));
		$this->ci->db->order_by('pubdate','desc')->limit(5);
		$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	}
	

	
	

	function getPageBlogs($page_limit,$offset_no){
		$this->ci->db->select('*');
		$this->ci->db->from('blog');
		$this->ci->db->order_by('created','desc');
		$this->ci->db->limit($page_limit);
		$this->ci->db->offset($offset_no);
	//	$this->ci->db->where('disabled',0);		
	//	$this->ci->db->order_by('pubdate','desc');
		$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	}
	
	
		
function getYearNewsNo($year)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('news');
	$this->ci->db->where('YEAR(pubdate)',$year);	
	$this->ci->db->where('disabled',0);	
	$query=$this->ci->db->get();
	
	$news_no=$query->result();
	$count1 = $query->num_rows(); 
	return $count1;
	
	}
	
	function getNewsByYear($year,$page_limit,$offset_no){
		$this->ci->db->select('*');
		$this->ci->db->from('news');
		$this->ci->db->limit($page_limit);
		$this->ci->db->offset($offset_no);
		$this->ci->db->where('YEAR(pubdate)',$year);		
		$this->ci->db->order_by('pubdate','desc');
		$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
		//echo($news);
	}
	
	function getNewsYears()
	{
		
		$this->ci->db->select('YEAR(pubdate) AS pubyear');
		$this->ci->db->distinct();
		$this->ci->db->from('news');
		$this->ci->db->order_by('YEAR(pubdate)');
		$query=$this->ci->db->get();
		$years=$query->result();
		
		return $years;
		
			
	}
	
	function getAuthClientList($id)
	{
	$this->ci->db->select('clients.*');
	$this->ci->db->distinct();
	$this->ci->db->from('clients,auth_relation');
	$this->ci->db->where('clients.id = auth_relation.client_id');
	$this->ci->db->where('auth_relation.auth_id',$id);
	//$this->ci->db->where('auth_relation.auth_id' ,'authority.auth_id');
	$query=$this->ci->db->get();
	
	$news=$query->result();
	return $news;
	
	} 
	
	
	function Client_dub_check ($a_id,$c_id){
	
		$this->ci->db->select('*')->from('auth_relation')->where('auth_id',$a_id)->where('client_id',$c_id);
		$query=$this->ci->db->get();
		$user=$query->row();		
		if ($user){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	function getAddClients($id){

	
		$this->ci->db->select('*');
		$this->ci->db->distinct();
		$this->ci->db->from('clients');	
		$this->ci->db->where('clients.id NOT IN (SELECT client_id FROM auth_relation WHERE auth_id = '.$this->ci->db->escape($id).')') ;
		$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	
	}
	
	function getCategoryList($id)
	{
		$this->ci->db->select('*');
		$this->ci->db->from('client_doc');
		$this->ci->db->where('user_id',$id);
		$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	
		
	
	}
	function getSingleImage1($id,$id1)
	{
	$this->ci->db->select('filepath1');
	$this->ci->db->from('client_doc');
	//$this->ci->db->where('doc_id',$id1);
	$this->ci->db->where('filepath1',$id);
	$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	
	}
	
		function getSingleImage2($id,$id1)
	{
	$this->ci->db->select('filepath2');
	$this->ci->db->from('client_doc');
	//$this->ci->db->where('doc_id',$id1);
	$this->ci->db->where('filepath2',$id);
	$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	}
		function getSingleImage3($id,$id1)
	{
	$this->ci->db->select('filepath3');
	$this->ci->db->from('client_doc');
	//$this->ci->db->where('doc_id',$id1);
	$this->ci->db->where('filepath3',$id);
	$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
	}
	
	function getFirstVideo()
	{
	$this->ci->db->select('*');
	$this->ci->db->from('video');
	$this->ci->db->limit(1);
	$query=$this->ci->db->get();
	$news=$query->result();
	return $news;
	}
	
	function getAllVideo()
	{
	$this->ci->db->select('*');
	$this->ci->db->from('video');
	$query=$this->ci->db->get();
	$news=$query->result();
	return $news;
	}
	
	function getvthumbs()
	{
	$this->ci->db->select('*');
	$this->ci->db->from('video');
	$query=$this->ci->db->get();
	$news=$query->result();
	return $news;
	}



	////////////Decor/////



			function getClients(){
		$this->ci->db->select('*');
		$this->ci->db->from('clients');
		$this->ci->db->order_by('id','desc');
		$query=$this->ci->db->get();
		$clients=$query->result();
		return $clients;
	}

		function getSingleClient($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('clients');
	$this->ci->db->where('id',$id);
	$query=$this->ci->db->get();
	$client=$query->row();
	//echo $this->ci->db->last_query();
	return $client;
	}

	function deleteClient($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('clients');
	}
	
				function getCategories(){
		$this->ci->db->select('*');
		$this->ci->db->from('categories');
		$query=$this->ci->db->get();
		$categories=$query->result();
		//echo $this->ci->db->last_query();

		return $categories;
	}

		function getSingleCategory($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('categories');
	$this->ci->db->where('id',$id);
	$query=$this->ci->db->get();
	$category=$query->row();
	//echo $this->ci->db->last_query();
	return $category;
	}

	function deleteCategory($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('categories');
	}

	
	

		function getCasestudies(){
		$this->ci->db->select('*');
		$this->ci->db->from('case_study');
		$query=$this->ci->db->get();
		$categories=$query->result();
		return $categories;
	}

		function getSingleCasestudy($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('case_study');
	$this->ci->db->where('id',$id);
	$query=$this->ci->db->get();
	$category=$query->row();
	//echo $this->ci->db->last_query();
	return $category;
	}

	function deleteCasestudy($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('case_study');
	}
		
		function getAllCasestudyImages($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('gallery');
	$this->ci->db->where('csid',$id);
	$query=$this->ci->db->get();
	$category=$query->result();
	//echo $this->ci->db->last_query();
	return $category;
	}

	
	function deleteGalleryImage($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('gallery');
	}


		function getCasestudiesByCategory($id){
		$this->ci->db->select('*');
		$this->ci->db->from('case_study');
		$this->ci->db->where('categoryid',$id);
		$query=$this->ci->db->get();
		$categories=$query->result();
		return $categories;
	}

		function getCasestudiesByClient($id){
		$this->ci->db->select('*');
		$this->ci->db->from('case_study');
		$this->ci->db->where('clientid',$id);
		$query=$this->ci->db->get();
		$categories=$query->result();
		return $categories;
	}

	function getAllBanner()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('banner');
			$query=$this->ci->db->get();
			$banner=$query->result();
	//echo $this->ci->db->last_query();
	return $banner;
		

	}

	function getSingleBanner($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('banner');
	$this->ci->db->where('id',$id);
	$query=$this->ci->db->get();
	$banner=$query->row();
	return $banner;
	}

	function deleteBanner($id,$filepathname){

	//  if (file_exists($filepathname)) {
  //   unlink(realpath($filepathname));

  //   echo 'File '.$filepathname.' has been deleted';
  // } else {
  //   echo 'Could not delete '.$filepathname.', file does not exist';
  // }
		//unlink($filepathname);
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('banner');
	}
	

	function getAllTestimonials()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('testimonial');
			$query=$this->ci->db->get();
			$testimonial=$query->result();
			return $testimonial;
		

	}
		function getSingleTestimonial($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('testimonial');
	$this->ci->db->where('id',$id);
	$query=$this->ci->db->get();
	$testimonial=$query->row();
	return $testimonial;
	}

	function deleteTestimonial($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('testimonial');
	}
	


	function getAllDynamos()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('dynamo');
			$query=$this->ci->db->get();
			$dynamos=$query->result();
			return $dynamos;

		

	 }
		function getSingleDynamo($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('dynamo');
	$this->ci->db->where('id',$id);
	 $query=$this->ci->db->get();
	 $dynamo=$query->row();
	 //echo $query;
	 return $dynamo;
	// //echo $this->ci->db->last_query();
	 }

	 function deleteDynamo($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('dynamo');
	}

		function getAllAchievers()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('achievers');
			$query=$this->ci->db->get();
			$achievers=$query->result();
			return $achievers;

	 }

	 function getSingleAchiever($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('achievers');
	$this->ci->db->where('id',$id);
	 $query=$this->ci->db->get();
	$achiever=$query->row();
	
	 //echo $this->ci->db->last_query();
	 return $achiever;

	 }

	  function deleteAchiever($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('achievers');
	}

			function getAllBelievers()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('believers');
			$query=$this->ci->db->get();
			$achievers=$query->result();
			return $achievers;

	 }


	 function getSingleBeliever($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('believers');
	$this->ci->db->where('id',$id);
	 $query=$this->ci->db->get();
	$believer=$query->row();
	
	 //echo $this->ci->db->last_query();
	 return $believer;

	 }


	  function deleteBeliever($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('believers');
	}

		function getBlogs(){
		$this->ci->db->select('*');
		$this->ci->db->from('blog');
		$this->ci->db->order_by("created", "desc"); 
		$query=$this->ci->db->get();
		$categories=$query->result();
		return $categories;
	}


function get3Blogs(){
		$this->ci->db->select('*');
		$this->ci->db->from('blog');
		$this->ci->db->order_by("created", "desc"); 
		$this->ci->db->limit(3);
		$query=$this->ci->db->get();
		$categories=$query->result();
		return $categories;
	}
		function getSingleBlog($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('blog');
	$this->ci->db->where('id',$id);
	$query=$this->ci->db->get();
	$category=$query->row();
	//echo $this->ci->db->last_query();
	return $category;
	}

	function deleteBlog($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('blog');
	}

		function getVisionary(){
		$this->ci->db->select('*');
		$this->ci->db->from('visionary');
		$query=$this->ci->db->get();
		$visionary=$query->result();
		return $visionary;
	}

		function getSingleVisionary($id)
	{
	$this->ci->db->select('*');
	$this->ci->db->from('visionary');
	$this->ci->db->where('id',$id);
	$query=$this->ci->db->get();
	$category=$query->row();
	//echo $this->ci->db->last_query();
	return $category;
	}

	function deleteVisionary($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('visionary');
	}

			function getAllCreativity()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('creativity');
			$query=$this->ci->db->get();
			$creativity=$query->result();
			return $creativity;

	 }


	 function getSingleCreativity($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('creativity');
	$this->ci->db->where('id',$id);
	 $query=$this->ci->db->get();
	$creativity=$query->row();
	
	 //echo $this->ci->db->last_query();
	 return $creativity;

	 }


	  function deleteCreativity($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('creativity');
	}


			function getAllCreativityShelf()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('creativity_product');
			$query=$this->ci->db->get();
			$creativity=$query->result();
			return $creativity;

	 }


	 function getSingleCreativityShelf($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('creativity_product');
	$this->ci->db->where('id',$id);
	 $query=$this->ci->db->get();
	$creativity=$query->row();
	
	 //echo $this->ci->db->last_query();
	 return $creativity;

	 }


	  function deleteCreativityShelf($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('creativity_product');
	}

	function getAllGalleries(){
		$this->ci->db->select('*');
		$this->ci->db->from('gallery');
		$this->ci->db->order_by('created','desc');
		$query=$this->ci->db->get();
		//echo $this->ci->db->last_query();
		$gallery=$query->result();
		return $gallery;
	}

		 function getSingleGallery($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('gallery');
	$this->ci->db->where('id',$id);
	 $query=$this->ci->db->get();
	$creativity=$query->row();
	
	 //echo $this->ci->db->last_query();
	 return $creativity;

	 }


	function deleteGallery($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('gallery');
	}
	
	function getAllCalenders(){
		$this->ci->db->select('*');
		$this->ci->db->from('calender');
		$this->ci->db->order_by('date','desc');
		$query=$this->ci->db->get();
		//echo $this->ci->db->last_query();
		$gallery=$query->result();
		return $gallery;
	}

		 function getSingleCalender($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('calender');
	$this->ci->db->where('id',$id);
	 $query=$this->ci->db->get();
	$creativity=$query->row();
	
	 //echo $this->ci->db->last_query();
	 return $creativity;

	 }


	function deleteCalender($id){
		$this->ci->db->where('id', $id);
		$this->ci->db->delete('calender');
	}

	function getCalFeed()
	{
		$this->ci->db->select('id,event AS title,date as start');
		$this->ci->db->from('calender');
		$query=$this->ci->db->get();
		
		$gallery=$query->result();
		//echo $this->ci->db->last_query();
		return $gallery;
	
	// $sql = "select 'event' as 'title' from 'calender'";
	// $calender = $this->db->query($sql);
	// return $calender;



		//$query = $this->db->query('SELECT event AS title FROM calender');

		// $row = $query->reset();
		//  return $row;
	}

		function getRecentCreativity()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('creativity');
		$this->ci->db->order_by('created','desc');
		$this->ci->db->limit(1);


			$query=$this->ci->db->get();
			$creativity=$query->row();

			return $creativity;

	 }

			function getCategoryCount()
	{

		// $cont1 = $this->ci->db->count_all('categories');
		// // $this->ci->db->select('*');
		// // $this->ci->db->from('creativity_product');
		// // 	$query=$this->ci->db->get();
		// // 	$creativity=$query->result();

		// // 	 $count1 = $this->db->count_all_results();
		//  	return $count;

	 }

	  function getCatProduct($id)
	 {

	 $this->ci->db->select('*');
	 $this->ci->db->from('creativity_product');
	$this->ci->db->where('catid',$id);
	 $query=$this->ci->db->get();
	$creativity=$query->result();
	
	 //echo $this->ci->db->last_query();
	 return $creativity;

	 }

	 	function get3Achievers()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('achievers');
		$this->ci->db->order_by('created');
		$this->ci->db->limit(3);
			$query=$this->ci->db->get();
			$achievers=$query->result();
			return $achievers;

	 }


	 	 	function get3Believers()
	{
		$this->ci->db->select('*');
		$this->ci->db->from('believers');
		$this->ci->db->order_by('created');
		$this->ci->db->limit(3);
			$query=$this->ci->db->get();
			$believers=$query->result();
			return $believers;

	 }

	 function getGalleryByYear($year){
		$this->ci->db->select('*');
		$this->ci->db->from('gallery');
		$this->ci->db->where('YEAR(created)',$year);		
		$this->ci->db->order_by('created','desc');
		$query=$this->ci->db->get();
		$news=$query->result();
		return $news;
		
	}

	function GalleryYears()
	{
		$this->ci->db->distinct();
		$this->ci->db->select('YEAR(created) AS yyyy');
		$this->ci->db->from('gallery');
		$this->ci->db->order_by('created','desc');
		$query=$this->ci->db->get();
		$years=$query->result();
		//echo $this->ci->db->last_query();
		return $years;
	}

		function GalleryFirstYears()
	{
		//$this->ci->db->distinct();
		$this->ci->db->select('YEAR(created)');
		$this->ci->db->from('gallery');
		$this->ci->db->order_by('created','desc');
			$this->ci->db->limit(1);
		$query=$this->ci->db->get();
		//echo $this->ci->db->last_query();
		$year=$query->row();
		return $year->created;
	}

	

	 


	



	

		
	
}