<?php

function add_meta_title ($string)
{
	$CI =& get_instance();
	$CI->data['meta_title'] = e($string) . ' - ' . $CI->data['meta_title'];
}

function btn_edit ($uri){
	return anchor($uri, '<span class="glyphicon glyphicon-edit"></span> ');
}
function btn_add ($uri){
	return anchor($uri, '<span class="glyphicon glyphicon-plus"></span> ');
}


function btn_delete ($uri){
	return anchor($uri, '<span class="glyphicon glyphicon-floppy-remove"></span> ', array(
		'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
	));
}

function formatdate($day){
	$datetime = strtotime($day);
	return date("d M Y", $datetime);
}
function formatnewsdate($day){
	$datetime = strtotime($day);
	return date("M d, Y", $datetime);
}
function formatdateuser($day){
	$datetime = strtotime($day);
	return date("d/m/Y", $datetime);
}
function caldatetosql($date){
	return substr($date,6,4)."-".substr($date,3,2)."-".substr($date,0,2);
}
function formatslug($slug){
	return str_replace(" ", "-", mb_strtolower($slug, 'UTF-8'));
}
function article_link($article){
	return 'article/' . intval($article->id) . '/' . e($article->slug);
}
function article_links($articles){
	$string = '<ul>';
	foreach ($articles as $article) {
		$url = article_link($article);
		$string .= '<li>';
		$string .= '<h3>' . anchor($url, e($article->title)) .  ' ›</h3>';
		$string .= '<p class="pubdate">' . e($article->pubdate) . '</p>';
		$string .= '</li>';
	}
	$string .= '</ul>';
	return $string;
}

function get_excerpt($article, $numwords = 50){
	$string = '';
	$url = article_link($article);
	$string .= '<h2>' . anchor($url, e($article->title)) .  '</h2>';
	$string .= '<p class="pubdate">' . e($article->pubdate) . '</p>';
	$string .= '<p>' . e(limit_to_numwords(strip_tags($article->body), $numwords)) . '</p>';
	$string .= '<p>' . anchor($url, 'Read more ›', array('title' => e($article->title))) . '</p>';
	return $string;
}

function limit_to_numwords($string, $numwords){
	$excerpt = explode(' ', $string, $numwords + 1);
	if (count($excerpt) >= $numwords) {
		array_pop($excerpt);
	}
	$excerpt = implode(' ', $excerpt);
	return $excerpt;
}

function e($string){
	return htmlentities($string);
}