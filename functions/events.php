<?php
/*
	Events
	
*/
function get_events(){
	global $wpdb;
	$sql = "select ID, post_title, post_content, post_excerpt, post_date from wp_posts where post_type = 'event' and (post_status = 'publish' or post_status = 'future') order by post_date"; 
	$events = $wpdb->get_results ($sql);
	$date_now = date("Y-m-d");
	$data = array('coming_events'=>array(),'past_events'=>array());
	foreach($events as $key => $value){
		extract((array) $value);
		$img = wp_get_attachment_image_src( get_post_thumbnail_id($ID), "medium_large size");
		
		$link = get_permalink($ID);
		
		
		$this_event = array(
			'id' => $ID,
			'title' => $post_title,
			'content' => $post_content,
			'excerpt' => $post_excerpt,
			'date' => $post_date,
			'link' => $link,
			'event_type'=>get_post_meta($ID,"event_type",true),
			'event_cost'=>get_post_meta($ID,"event_cost",true),
			'event_location'=>get_post_meta($ID,"event_location",true),
			'event_address'=>get_post_meta($ID,"event_address",true),
			
			'event_directions'=>get_post_meta($ID,"event_directions",true),
			'event_url'=>get_post_meta($ID,"event_url",true),
			'register_url'=>get_post_meta($ID,"register_url",true),
			'event_cost'=>get_post_meta($ID,"event_cost",true),
			'event_date_start'=>get_post_meta($ID,"event_date_start",true),
			'event_date_end'=>get_post_meta($ID,"event_date_end",true),
			
			'start_time'=>get_post_meta($ID,"start_time",true),
			
			'end_time'=>get_post_meta($ID,"end_time",true),
			
			'img' => getThumbnail($ID)
			
			
			
		);
		
	 $this_date =	 date("Y-m-d", $this_event['event_date_start']);
	 
		if ($date_now < $this_date) {	
			array_push($data['coming_events'], $this_event);
		} else {
			array_push($data['past_events'], $this_event);
		}
				
					
			
	}
	
	
	return $data;
	
	
}
function get_event($event){
	extract($event);
	ob_start();
	
	
	
	$this_target = ''; // default target to none;
	if($event_url == 'self') { 
		$this_url = get_permalink($id);//don't show a date
	} else if($event_url == ''){ 
		$this_url = ''; // show specified date 
	} else {
		$this_url = $event_url;
		$this_target = ' target="_blank"'; // if external url, target new window.
	} // show date stamp specified on post
	
	




	//($event_date_span != '') ? $this_date = $event_date_span : $this_date = date("l, F j, Y", strtotime($date)); //date
	//date
	if($event_date_start== 'null') { $this_date = '';//don't show a date
	} else if($event_date_start != ''){ $this_date = $event_date_start; // show specified date 
	} else {$this_date = date("l, F j, Y", strtotime($event_date_start));
	
	} // show date stamp specified on post
	
	//time
	if($start_time == 'null') { $this_time = '';//don't show a time
	} else if($start_time != ''){ $this_time = $start_time; // show specified time 
	} else {$this_time = date("g:i a", strtotime($date));} // show time stamp specified on post
	
	
	?>
	 <div class="event">
<div class="event-heading">
<div class="event-type"><strong><?=strtoupper($event_type)?></strong><br>
<h4>
<?php 
if($this_url != ""){
	 ?><a class="event-title" href="<?=$this_url?>" title="More Info" <?=$this_target?>><?=$title?></a>
	 <?php
	} else {?>
	<span class="event-title" title="<?=$title?>"><?=$title?></span>
		

	<?php 

	} 
	
	?>
	</h4>
	<div class="event-date">
			<?php
			print date("l, j F Y", $event_date_start);
			if($event_date_end != '' && $event_data_end != $event_date_start){
				print " - ".date("l, j F Y", $event_date_end);
			}
			print "<BR>";
			if($start_time != ''){
				print date("g:i a", strtotime($start_time));
			}
			if($end_time != ''){
				print " - ". date("g:i a", strtotime($end_time));
			}			
?><BR></div>
<?php
if($img != ""){
		if($this_url != ""){
			
     ?><a href="<?=$this_url?>" <?=$this_target?> title="<?=$title?>"><?php } ?><img src="<?=$img?>" alt="<?=$title?>"><?php
		if($img != ""){
     ?></a><?php } else {?><img src="<?=$img?>" alt="<?=$title?>"><?php } 
	}
?>
	<p>
		<?=$content?>
</p>	 
		

		</div>
		 
	<?=showField($event_location,"Location")?>
	<?=showField($event_address,"Address")?>
	<?=showField($event_directions,"Directions")?>
	
</div>

     <div class="event-thumb">
	 <?php
	
	
?>	</div>
    <div class="event-listing">
   

    
   <?=showField($excerpt)?>
    </div>
</div>
        
<?php
	return ob_get_clean();
}





function showField($field,$label="",$wrap=''){
    $result = '';
	
	if($field != ''){
		if($wrap!= ''){
			$result .= "<$wrap>";
			//$result .= $field;
		} 
		if($label != ''){
			$result .= '<strong>'.$label.':</strong> ';
		}
		$result .= wpautop($field);
		if($wrap!= ''){
			$result .= "</$wrap>";
		}
		
	}
	return $result;
	
}


function display_events(){
	
	
	
	
	$data = get_events();
	ob_start();
	
	if(count($data['coming_events']) > 0){
	
	?>
         

	<div class="event-group" id="coming-events">
    	<h2>Upcoming Events</h2>
        
		<?php 
			foreach($data['coming_events'] as $key => $event){
				print get_event($event);
			}
		?>
        
    </div>
	<?php
	} //count of upcoming events > 0

	if(count($data['past_events'])){

	?>
    
    <div class="event-group" id="past-events">
	<h2>Past Events</h2>

   		<?php 
			foreach(array_reverse($data['past_events']) as $key => $event){
				print get_event($event);
			}
		?>
        
        
    </div>
	
    
	<?php
	}//past events
	
	//return ob_get_clean();
}
?>