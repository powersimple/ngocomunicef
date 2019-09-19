<?php

    function memberGridLevel($member_level){
        if($member_level == 'Terrabit' || $member_level == 'Gigabit'){
            return 'col-sm-12 col-md-6 col-lg-6';
        } else if($member_level == 'Megabit'){
             return 'col-sm-6 col-md-4 col-lg-4';
        } else{
            return 'col-sm-6 col-md-3 col-lg-3';
        }
    }


    function displayMembers($members){
        



        foreach($members as $key => $member){
            extract( $member);
            //var_dump($member);
            print '<div class="'.memberGridLevel($member_level).' member '.strtolower($member_level).'">';
            $src= getThumbnail($thumbnail,"Full");
            print '<a href="'.$member_url.'">';
            if($src == ''){
                print "<strong>$member_name</strong>";
            } else {
            print '<img src="'.$src.'" alt="'.$member_name.'">';
            }

            print '</a></div>';

        }
        
    }
    function getMemberLevel($level){
        global $wpdb;
        
        $q = $wpdb->get_results("
            select p.ID, p.post_name, p.post_date, p.post_title, p.post_content
            from wp_posts p, wp_postmeta m
            where p.post_type = 'member' 
            and p.post_status='publish'
            and m.meta_key = 'member_level'
            and m.meta_value = '$level'
            and m.post_id = p.ID
            order by menu_order
        ");
        $members = array();
        foreach($q as $key => $value){
            extract((array) $value);

            array_push($members,
            array(
                "id" => $ID,
                "member_name" =>$post_title,
                "member_url"=>get_post_meta($ID,"member-url",true),
                "member_level"=>get_post_meta($ID,"member_level",true),
                "thumbnail" => get_post_thumbnail_id($ID)
            ));

        }
    return $members;
    }
    function memberList($members){
        $member_list = array();
        foreach($members as $key=>$member_id){
            array_push($member_list,getMember($member_id));
        }
        return $member_list;
    }
    function getMember($member_id){
        global $wpdb;
        $q = $wpdb->get_row("
        select ID, post_name, post_date, post_excerpt, post_title, post_content
        from wp_posts
        where ID= $member_id
        
        order by menu_order
            ");
            extract((array) $q);
        $member = array(
            "id" => $member_id,
            "member_name" =>$post_title,
            "content" => $post_content,
            "excerpt" => $post_excerpt,
            
            
            "member_url" => get_post_meta($member_id,"member-url",true),
            "member_level" => get_post_meta($member_id,"member_level",true),
            "thumbnail" => get_post_thumbnail_id($ID),
        );
        
        return $member;

    }
    function displayMember($member_data){
        extract($member_data);

         $src= getThumbnail($thumbnail,"thumbnail");
        
    
        print '<a class="" href="'.$member_url.'" target="blank">';
        if($src != ''){
            print '<img class="member '.strtolower($member_level).'" src="'.$src.'" alt="'.$member_name.'">';
        } else {
            print $member_name;
        }
        
        print '</a>';

       
    }
?>