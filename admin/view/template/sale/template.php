<?php

// DRUPAL FUNCTIONALITY -------------------------------------------------------------------

function fdc_menu_alter(&$items) {
	/*
	 *	Disable Access to /node
	 */
	$items['node']['access callback'] = FALSE;
	unset($items['node']);
}

function fdc_preprocess_html(&$vars) {
	/*
	 *	Override or insert variables into the html template.
	 */
	global $theme_path;
	//	Add conditional CSS for IE7 and below.
	//  drupal_add_css($theme_path . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
	$vars['head_title'] = drupal_get_title();  
	//  $vars['head_title'] = implode(' | ', array(drupal_get_title(), variable_get('site_name'), variable_get('site_slogan')));  
}

// MENU FUNCTIONALITY ---------------------------------------------------------------------

function get_siblings_menu($menuname, $nid, $selectlist = NULL) {
    
    /*
     *	this really would be better returned as an array.
     *	however due to multiple loops requires too much time. - Mitchell
     */
    
    $menu_a = menu_tree_page_data($menuname);


    if (isset($selectlist)) {
	foreach ($menu_a as $k => $item) {
	    $success = false;

//	    $menu_siblings = '<h2 class="nav_siblings_title">
//				<a href="'.url($item['link']['link_path']).'">' . $item['link']['title'] . '</a>
//			    </h2>';

	    if ($item['below']) {
		$menu_siblings = '<select class="nav_siblings_smalldevices">';
		$menu_siblings .= '<option value="" style="display:none;">Select a Page</option>';
		foreach ($item['below'] as $child) {

		    if (str_replace('node/', '', $child['link']['link_path']) == $nid) {

			$menu_siblings .= '<option selected="selected" value="' . url($child['link']['link_path']) . '">' . $child['link']['title'] . '</option>';

			$success = true;
			
		    } else {
			$menu_siblings .= '<option value="' . url($child['link']['link_path']) . '">' . $child['link']['title'] . '</option>';

		    }
		}
		$menu_siblings .= '</select>';
	    }

	    if ($success) {
		return $menu_siblings;
	    }
	}
    } else {
	foreach ($menu_a as $k => $item) {
	    $success = false;

		if ($item['link']['link_path'] != '<nolink>') {
			$menu_siblings = '<h2 class="nav_siblings_title">
					<a href="'.url($item['link']['link_path']).'">' . $item['link']['title'] . '</a>
					</h2>';
		} else {
			$menu_siblings = '<h2 class="nav_siblings_title">
					' . $item['link']['title'] . '
					</h2>';
		}

	    if ($item['below']) {
		$menu_siblings .= '<ul class="nav_siblings">';
		foreach ($item['below'] as $child) {

		    if (str_replace('node/', '', $child['link']['link_path']) == $nid) {
			$menu_siblings .= '
			    <li class="active">
				<a href="' . url($child['link']['link_path']) . '">' . $child['link']['title'] . '</a>
			    </li>';
			$success = true;
		    } else {
			$menu_siblings .= '<li><a href="' . url($child['link']['link_path']) . '">' . $child['link']['title'] . '</a></li>';
		    }
		}
		$menu_siblings .= '</ul>';
	    }

	    if ($success) {
		return $menu_siblings;
	    }
	}
    }
    
}

function get_children_menu($menuname, $parent_nid, $selectlist = NULL) {
	
    $menu_a = menu_tree_page_data($menuname);

    $menu_items = array();
    if ($menu_a) {
	foreach ($menu_a as $item) {
	    $nid = str_replace('node/', '', $item['link']['link_path']);
	    $menu_items[$nid] = array();
	    $menu_items[$nid]['title'] = $item['link']['title'];
	    $menu_items[$nid]['link_path'] = $item['link']['link_path'];
	    if ($item['below']) {
		foreach ($item['below'] as $child) {
		    $menu_items[$nid]['children'][] = array(
			'title' => $child['link']['title'],
			'link_path' => $child['link']['link_path'],
		    );
		}
	    }
	}
    }
    if (isset($selectlist)) {
		if (isset($menu_items[$parent_nid]['children'])) {
			$html = '<select class="nav_siblings_smalldevices">';
			$html .= '<option value="" style="display:none;">Select a Page</option>';
			foreach ($menu_items[$parent_nid]['children'] as $child) {
			$html .= '<option value="' . url($child['link_path']) . '">' . $child['title'] . '</option>';
			}
			$html .= '</select>';
		}

		if (isset($html)) {
			return $html;
		}
    } else {
	if (isset($menu_items[$parent_nid]['children'])) {
	    if ($menu_items[$parent_nid]['link_path'] != '<nolink>') {
			$html = '<h2 class="nav_siblings_title"><a href="'.url($menu_items[$parent_nid]['link_path']).'">' . $menu_items[$parent_nid]['title'] . '</a></h2><ul class="nav_siblings">';
		} else {
			$html = '<h2 class="nav_siblings_title">' . $menu_items[$parent_nid]['title'] . '</h2><ul class="nav_siblings">';
		}
	    foreach ($menu_items[$parent_nid]['children'] as $child) {
		$html .= '<li><a href="' . url($child['link_path']) . '">' . $child['title'] . '</a></li>';
	    }
	    $html .= '</ul>';
	}

	if (isset($html)) {
	    return $html;
	}
    }
}

function child_sibling_menu($nid) {
	// FILE USED FOR INCLUDING CONTENT INTO CHILDREN/SIBLING MENU STRUCTURE.
	// Original functions by Paul Martin @ FDC Studio
	// Drupal 7 modification & alterations by Mitchell Currie @ FDC Studio
	// $menuname = Name of the current menu item.
	// $nid = the target pages NID. 

	// Find Menu Title for Page
	$menuParent = menu_get_active_trail();
	if (sizeof($menuParent) >= 2 && $menuParent[1]) {
		// Grab Title
		$menuParent = $menuParent[1]['link_title'];
	}

	if (isset($menuParent)) {
		// Build Query with D7 Placeholders
		$is_parent_query = "SELECT
					menu_links.link_path
				FROM
					menu_links
				WHERE
					menu_links.link_title = :current_page
				AND
					menu_links.menu_name = 'main-menu'
				LIMIT 1";

		$is_parent_arg = array(
		// Pass in Menu Title to find Link Path
		':current_page' => $menuParent
		);

		$is_parent_result = db_query($is_parent_query, $is_parent_arg);
	}

	if (isset($is_parent_result)) {
		foreach ($is_parent_result as $row) {
		// Pull out NID of LINK PATH for parent
		$menu_node = str_replace('node/', '', $row->link_path);
		}

		// if current pages NID is same as parent menu NID then output get_children_menu, else output siblings.
		if ($menu_node == $nid) {
			$content_menu = get_children_menu('main-menu', $nid);
		} else {
			$content_menu = get_siblings_menu('main-menu', $nid);
		}
		
		return $content_menu;
		
	}
}

function select_menu($menuname) {
	/*
	 *  Output a menu as a select list.
	 */
	
	$menu = db_query("
		SELECT
		menu_links.menu_name,
		menu_links.mlid,
		menu_links.plid,
		menu_links.link_path,
		menu_links.router_path,
		menu_links.link_title,
		menu_links.`options`,
		menu_links.module,
		menu_links.hidden,
		menu_links.external,
		menu_links.has_children,
		menu_links.expanded,
		menu_links.weight,
		menu_links.depth,
		menu_links.customized,
		menu_links.p1,
		menu_links.p2,
		menu_links.p3,
		menu_links.p4,
		menu_links.p5,
		menu_links.p6,
		menu_links.p7,
		menu_links.p8,
		menu_links.p9,
		menu_links.updated
		FROM
		menu_links
		WHERE
		menu_name = :menuname
		AND
		hidden = 0
		AND
		depth = 1
		ORDER BY
		weight ASC		
		", array(':menuname' => $menuname))->fetchAll();	
	
	return $menu;
	
}

// NEWS FUNCTIONALITY ---------------------------------------------------------------------

function news_scroller($limit = '') {
	// scroll through news
	
	// Set NID of News Page
	$news_articles_query = "
		SELECT
			node.nid,
			node.title,
			field_data_field_news_article_title.field_news_article_title_value,
			field_data_field_news_article_content.field_news_article_content_value,
			taxonomy_term_data.tid AS `term_tid`,
			taxonomy_term_data.`name` AS `term_name`,
			field_data_field_news_article_date.field_news_article_date_value,
			field_data_field_news_article_content.field_news_article_content_summary
		FROM
			node
		LEFT JOIN field_data_field_collection_newsarticle ON field_data_field_collection_newsarticle.entity_id = node.nid
		LEFT JOIN field_data_field_news_article_title ON field_data_field_news_article_title.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN field_data_field_news_article_date ON field_data_field_news_article_date.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN field_data_field_news_article_content ON field_data_field_news_article_content.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN field_data_field_news_article_category ON field_data_field_news_article_category.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_news_article_category.field_news_article_category_tid
		WHERE
			node.type = 'news_article'
		AND node.`status` = 1
		ORDER BY
			field_data_field_news_article_date.field_news_article_date_value DESC
		LIMIT {$limit}
		";

	$news_articles_result = db_query($news_articles_query);
	$news_articles_objects = $news_articles_result->fetchAll();
	foreach ($news_articles_objects as $id=>$news_articles_data) {
		// Grab News Items
		$news_articles[] = array(
			'nid' => $news_articles_data->nid,
			'title' => $news_articles_data->title,
			'tid' => $news_articles_data->term_tid,
			'category' => $news_articles_data->term_name,
			'title_override' => $news_articles_data->field_news_article_title_value,
			'body' => $news_articles_data->field_news_article_content_value,
			'summary' => $news_articles_data->field_news_article_content_summary,
			'date' => $news_articles_data->field_news_article_date_value,
		);
	}

	return $news_articles;
	
}

function get_related_news($title = '', $limit = NULL) {
	
	/*
	 *	Functionality to pull through related news based on a sub-category to each item. 
	 *	Uses the pages title/heading to find any news story 'tagged' with the same data.
	 *	- Mitchell 
	 */
	
	$related_query = "
		SELECT
			node.nid,
			node.title,
			field_data_field_news_article_title.field_news_article_title_value,
			field_data_field_news_article_content.field_news_article_content_value,
			field_data_field_news_article_content.field_news_article_content_summary,
			field_data_field_news_article_date.field_news_article_date_value,
			GROUP_CONCAT(taxonomy_term_data.tid) AS tid,
			SUBSTR(
				GROUP_CONCAT(
					CONCAT_WS(
						' ',
						'',
						taxonomy_term_data.`name`
					)
					ORDER BY
						taxonomy_term_data.`name`
				),
				2
			) AS `category`
		FROM
			node
		LEFT JOIN field_data_field_collection_newsarticle ON field_data_field_collection_newsarticle.entity_id = node.nid
		LEFT JOIN field_data_field_news_article_title ON field_data_field_news_article_title.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN field_data_field_news_article_sub_cats ON field_data_field_news_article_sub_cats.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		INNER JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_news_article_sub_cats.field_news_article_sub_cats_tid
		INNER JOIN field_data_field_news_article_date ON field_data_field_news_article_date.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		INNER JOIN field_data_field_news_article_content ON field_data_field_news_article_content.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		WHERE
		node.type = 'news_article' AND
		node.`status` = 1 AND
		taxonomy_term_data.`name` LIKE '{$title}'
		GROUP BY
			node.nid		
		ORDER BY
			field_news_article_date_value DESC
		";
	
	if (isset($limit)) {
		$related_query .= " LIMIT {$limit} ";
	}		

	$related_result = db_query($related_query);
	if (isset($related_result)) {
		$related_objects = $related_result->fetchAll();
		$news_articles = array();
		foreach ($related_objects as $id=>$news_articles_data) {

			$news_articles[$id]['nid'] = $news_articles_data->nid;
			$news_articles[$id]['date'] = $news_articles_data->field_news_article_date_value;
			
			// If a heading is set, use it, otherwise use title.
			if (isset($news_articles_data->field_news_article_title_value) && $news_articles_data->field_news_article_title_value != '') {
				$news_articles[$id]['title'] = $news_articles_data->field_news_article_title_value;
			} else {
				$news_articles[$id]['title'] = $news_articles_data->title;
			}
			
			// if a summary is set, use it, otherwise use content, if more than 300, trim, else use it.
			if (isset($news_articles_data->field_news_article_content_summary) && $news_articles_data->field_news_article_content_summary != '') {
				$news_articles[$id]['summary'] = $news_articles_data->field_news_article_content_summary;
			} else if (strlen($news_articles_data->field_news_article_content_value) > 300) {
				$news_articles[$id]['summary'] = preg_replace('/\s+?(\S+)?$/', '', substr(strip_tags($news_articles_data->field_news_article_content_value) . ' ', 0, 298)) . '...';
			} else {
				$news_articles[$id]['summary'] = strip_tags($news_articles_data->field_news_article_content_value);
			}
				
		}

		if (isset($news_articles) && is_array($news_articles)) {
			return $news_articles;
		}		
	}
	
}

// GOOGLE MAP FUNCTIONALITY ---------------------------------------------------------------
function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function get_latlong_from_location($location) {
	$mapKey = 'AIzaSyAUfJGlxArsEBzHtVrb97Q87CvrHk1fXn4';
	// Due to Google's TOS, the Lat/Long cannot be stored within the DB.
	// Also the Map MUST be publically accessable, and not behind passworded areas.
        $googleMapurl = 'https://maps.googleapis.com/maps/api/geocode/json?key='.$mapKey.'&address=' . urlencode($location) . '&sensor=false';
	
//        $geoMap = file_get_contents_curl($googleMapurl);
        $geoMap = file_get_contents($googleMapurl);
	$get_json =  json_decode($geoMap,true);
	
	$lat = "52.7354008";
	$long = "-1.1083412";
        if(isset($get_json['results']['0'])){
            $lat = $get_json['results']['0']['geometry']['location']['lat'];
            $long = $get_json['results']['0']['geometry']['location']['lng'];
        }
	
	if ($lat && $long) {
		$geolocation = array(
			'lat' => $lat,
			'long' => $long,
		);
		
		return $geolocation;
	} else {
		return FALSE;
	}
	
}

function google_map($location, $add_marker = TRUE, $marker_icon = NULL, $zoom = 15, $width = '500px', $height = '500px') {
	
	if ($location) {
		$geolocation = get_latlong_from_location($location);
	}
	
	if (is_array($geolocation)) {
		
		require_once('sites/all/themes/fdc/classes/googlemap.class.php');
		
		$googleMap = new GoogleMap($geolocation['lat'], $geolocation['long']);
		$googleMap->zoom = $zoom;
		$googleMap->canvasWidth = $width;
		$googleMap->canvasHeight = $height;
		
		if (is_bool($add_marker) && $add_marker) {
			$googleMap->addMarker($geolocation['lat'], $geolocation['long'], NULL, NULL, '1', 'DROP', $marker_icon);
		} else if (is_string($add_marker) && $add_marker) {
			$googleMap->addMarker($geolocation['lat'], $geolocation['long'], $add_marker, NULL, '1', 'DROP', $marker_icon);
		}
		
		return $googleMap->display();
				
	} else {
		return FALSE;
	}
	
}

// COUNTRY VIEWING FUNCTIONALITY ------------------------------------------------------

function country_content($nid) {
	/*
	 *	Pull all information relating to a country page, 
	 *	such as news, galleries, pages etc.
	 *	DEFUNCT: Need to discuss with ALEX C regarding how Country is to be laid out.
	 */
	
	if ($nid) {
		(int) $nid;
		
		$query = "
			SELECT DISTINCT
				taxonomy_term_data.`name` AS `term_name`,
				taxonomy_term_data.tid AS `term_tid`,
				taxonomy_image.uri AS `taxonomy_image`,
				field_data_field_taxonomy_image.field_taxonomy_image_alt AS `taxonomy_image_alt`,
				field_data_field_taxonomy_image.field_taxonomy_image_title AS `taxonomy_image_title`,
				node.nid AS `parentnid`,
				node.type,
				node.title,
				
			CASE /* Heading */
			WHEN node.type = 'page' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'video' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_title.field_news_article_title_value
			END AS `heading`,
			
			CASE /* Date */
			WHEN node.type = 'page' THEN
				node.created
			WHEN node.type = 'gallery' THEN
				node.created
			WHEN node.type = 'video' THEN
				node.created
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_date.field_news_article_date_value
			END AS `date`,
			
			CASE /* Body */
			WHEN node.type = 'page' THEN
				field_data_field_content_body.field_content_body_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_body.field_content_body_value
			WHEN node.type = 'video' THEN
				field_data_field_content_body.field_content_body_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_content.field_news_article_content_value
			END AS `body`,
			
			CASE /* Summary */
			WHEN node.type = 'page' THEN
				field_data_field_content_body.field_content_body_summary
			WHEN node.type = 'gallery' THEN
				field_data_field_content_body.field_content_body_summary
			WHEN node.type = 'video' THEN
				field_data_field_content_body.field_content_body_summary
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_content.field_news_article_content_summary
			END AS `summary`,
			
			 CASE /* Page Banner */
			WHEN node.type = 'page' THEN
				(
					SELECT
						file_managed.uri
					FROM
						node
					INNER JOIN field_data_field_collection_content_banner ON field_data_field_collection_content_banner.entity_id = node.nid
					INNER JOIN field_data_field_content_banner_image ON field_data_field_content_banner_image.entity_id = field_data_field_collection_content_banner.field_collection_content_banner_value
					INNER JOIN file_managed ON file_managed.fid = field_data_field_content_banner_image.field_content_banner_image_fid
					WHERE
						node.nid = parentnid
				)
			WHEN node.type = 'news_article' THEN
				(
					SELECT
						file_managed.uri
					FROM
						node
					INNER JOIN field_data_field_collection_content_banner ON field_data_field_collection_content_banner.entity_id = node.nid
					INNER JOIN field_data_field_content_banner_image ON field_data_field_content_banner_image.entity_id = field_data_field_collection_content_banner.field_collection_content_banner_value
					INNER JOIN file_managed ON file_managed.fid = field_data_field_content_banner_image.field_content_banner_image_fid
					WHERE
						node.nid = parentnid
				)
			WHEN node.type = 'gallery' THEN
				(
					SELECT
						file_managed.uri
					FROM
						node
					INNER JOIN field_data_field_collection_gallery ON field_data_field_collection_gallery.entity_id = node.nid
					INNER JOIN field_data_field_gallery_image ON field_data_field_gallery_image.entity_id = field_data_field_collection_gallery.field_collection_gallery_value
					INNER JOIN file_managed ON file_managed.fid = field_data_field_gallery_image.field_gallery_image_fid
					WHERE
						node.`status` = 1
					AND node.nid = parentnid
					ORDER BY
						field_data_field_gallery_image.delta ASC
					LIMIT 1
				)
			WHEN node.type = 'video' THEN
				field_data_field_video_youtube.field_video_youtube_video_id
			END AS `image`,
			
			 CASE /* Page Banner Title */
			WHEN node.type = 'page' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'video' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_title.field_news_article_title_value
			END AS `image_title`,
			
			 CASE /* Page Banner Alt */
			WHEN node.type = 'page' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'video' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_title.field_news_article_title_value
			END AS `image_alt`,
			
			field_data_field_country_heading.field_country_heading_value AS `country_name`,
			
			country_node.nid AS `country_nid`,
			
			country_flag.uri AS `country_flag`
			
			FROM
				node
			LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
			LEFT JOIN field_data_field_categories_categories ON field_data_field_categories_categories.entity_id = field_data_field_collection_categories.field_collection_categories_value
			LEFT JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_categories_categories.field_categories_categories_tid
			LEFT JOIN field_data_field_collection_content ON field_data_field_collection_content.entity_id = node.nid
			LEFT JOIN field_data_field_content_heading ON field_data_field_content_heading.entity_id = field_data_field_collection_content.field_collection_content_value
			LEFT JOIN field_data_field_content_body ON field_data_field_content_body.entity_id = field_data_field_collection_content.field_collection_content_value
			LEFT JOIN field_data_field_collection_newsarticle ON field_data_field_collection_newsarticle.entity_id = node.nid
			LEFT JOIN field_data_field_news_article_title ON field_data_field_news_article_title.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
			LEFT JOIN field_data_field_news_article_date ON field_data_field_news_article_date.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
			LEFT JOIN field_data_field_news_article_content ON field_data_field_news_article_content.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
			LEFT JOIN field_data_field_collection_gallery ON field_data_field_collection_gallery.entity_id = node.nid
			LEFT JOIN field_data_field_collection_video ON field_data_field_collection_video.entity_id = node.nid
			LEFT JOIN field_data_field_video_youtube ON field_data_field_video_youtube.entity_id = field_data_field_collection_video.field_collection_video_value
			LEFT JOIN field_data_field_taxonomy_image ON field_data_field_taxonomy_image.entity_id = taxonomy_term_data.tid
			LEFT JOIN file_managed AS taxonomy_image ON taxonomy_image.fid = field_data_field_taxonomy_image.field_taxonomy_image_fid
			LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
			LEFT JOIN node AS country_node ON country_node.nid = field_data_field_categories_countries.field_categories_countries_target_id
			LEFT JOIN field_data_field_collection_country ON field_data_field_collection_country.entity_id = country_node.nid
			LEFT JOIN field_data_field_country_flag AS country_flag_entity ON country_flag_entity.entity_id = field_data_field_collection_country.field_collection_country_value
			LEFT JOIN field_data_field_country_heading ON field_data_field_country_heading.entity_id = field_data_field_collection_country.field_collection_country_value
			LEFT JOIN file_managed AS country_flag ON country_flag.fid = country_flag_entity.field_country_flag_fid
			WHERE
				node.`status` = 1
			HAVING
				`country_nid` LIKE '{$nid}'
			ORDER BY
				`date` DESC
			";	

		$results = db_query($query);

		if ($results->rowCount()) {
			$content = array();
			foreach ($results AS $result) {
				$content['content'][$result->term_name][] = array(
					'term_name' => $result->term_name,
					'term_tid' => $result->term_tid,
					'taxonomy_image' => $result->taxonomy_image,
					'taxonomy_image_title' => $result->taxonomy_image_title,
					'taxonomy_image_alt' => $result->taxonomy_image_alt,
					'nid' => $result->parentnid,
					'type' => $result->type,
					'title' => $result->title,
					'heading' => $result->heading,
					'date' => $result->date,
					'body' => $result->body,
					'summary' => $result->summary,
					'image' => $result->image,
					'image_title' => $result->image_title,
					'image_alt' => $result->image_alt,
					'country_name' => $result->country_name,
					'country_nid' => $result->country_nid,
					'country_flag' => $result->country_flag,
				);
				
				$content['menu']['term'][$result->term_tid] = $result->term_name;
				
				$content['menu']['type'][] = $result->type;

				
			}

			if (isset($content) && $content) {
				// Please see notes at top. Need limit on total grabbed.
				return $content;
			}
		}
		
	}
	
}

function country_list() {
	
	$countries_data = array();
	
	$countries_query = "
		SELECT
			node.nid,
			field_data_field_country_heading.field_country_heading_value,
			field_revision_field_country_content.field_country_content_value,
			field_data_field_country_flag.field_country_flag_alt AS `flag_image_alt`,
			field_data_field_country_flag.field_country_flag_title AS `flag_image_title`,
			file_managed.uri AS `flag_image`
		FROM
			node
		LEFT JOIN field_data_field_collection_country ON field_data_field_collection_country.entity_id = node.nid
		LEFT JOIN field_data_field_country_heading ON field_data_field_country_heading.entity_id = field_data_field_collection_country.field_collection_country_value
		LEFT JOIN field_data_field_country_flag ON field_data_field_country_flag.entity_id = field_data_field_collection_country.field_collection_country_value
		LEFT JOIN file_managed ON file_managed.fid = field_data_field_country_flag.field_country_flag_fid
		LEFT JOIN field_revision_field_country_content ON field_revision_field_country_content.entity_id = field_data_field_collection_country.field_collection_country_value
		WHERE
			node.`status` = 1
		AND node.type = 'country'		
		";
	
	$countries_data = db_query($countries_query)->fetchAll();
	
	if ($countries_data) {
		$countries = array();
		foreach ($countries_data AS $country_data) {
			$countries[$country_data->nid] = array(
				'nid' => $country_data->nid,
				'heading' => $country_data->field_country_heading_value,
				'body' => $country_data->field_country_content_value,
				'flag_image_alt' => $country_data->flag_image_alt,
				'flag_image_title' => $country_data->flag_image_title,
				'flag_image' => $country_data->flag_image
			);
		}
		
		if ($countries) {
			return $countries;
		}
	}
	
}

// HOME FUNCTIONALITY -----------------------------------------------------------------

function homepage_content() {
	/*
	 *	Display a list of Sectors, with all content related inside.
	 *	
	 *	ISSUES: 
	 *		Needs LIMIT on articles pulled. Somehow limit on the TID, not total NID. So 5 max from 23, 5 max from 33 etc.
	 * 
	 */
	
	$query = "
		SELECT DISTINCT
			taxonomy_term_data.`name` AS `term_name`,
			taxonomy_term_data.tid AS `term_tid`,
			taxonomy_image.uri AS `taxonomy_image`,
			field_data_field_taxonomy_image.field_taxonomy_image_alt AS `taxonomy_image_alt`,
			field_data_field_taxonomy_image.field_taxonomy_image_title AS `taxonomy_image_title`,
			node.nid AS `parentnid`,
			node.type,
			node.title,

			CASE /* Heading */
		WHEN node.type = 'page' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'gallery' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'video' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'news_article' THEN
			field_data_field_news_article_title.field_news_article_title_value
		END AS `heading`,

		 CASE /* Date */
		WHEN node.type = 'page' THEN
			node.created
		WHEN node.type = 'gallery' THEN
			node.created
		WHEN node.type = 'video' THEN
			node.created
		WHEN node.type = 'news_article' THEN
			field_data_field_news_article_date.field_news_article_date_value
		END AS `date`,

		 CASE /* Body */
		WHEN node.type = 'page' THEN
			field_data_field_content_body.field_content_body_value
		WHEN node.type = 'gallery' THEN
			field_data_field_content_body.field_content_body_value
		WHEN node.type = 'video' THEN
			field_data_field_content_body.field_content_body_value
		WHEN node.type = 'news_article' THEN
			field_data_field_news_article_content.field_news_article_content_value
		END AS `body`,

		 CASE /* Summary */
		WHEN node.type = 'page' THEN
			field_data_field_content_body.field_content_body_summary
		WHEN node.type = 'gallery' THEN
			field_data_field_content_body.field_content_body_summary
		WHEN node.type = 'video' THEN
			field_data_field_content_body.field_content_body_summary
		WHEN node.type = 'news_article' THEN
			field_data_field_news_article_content.field_news_article_content_summary
		END AS `summary`,

		 CASE /* Page Banner */
		WHEN node.type = 'page' THEN
			(
				SELECT
					file_managed.uri
				FROM
					node
				INNER JOIN field_data_field_collection_content_banner ON field_data_field_collection_content_banner.entity_id = node.nid
				INNER JOIN field_data_field_content_banner_image ON field_data_field_content_banner_image.entity_id = field_data_field_collection_content_banner.field_collection_content_banner_value
				INNER JOIN file_managed ON file_managed.fid = field_data_field_content_banner_image.field_content_banner_image_fid
				WHERE
					node.nid = parentnid
			)
		WHEN node.type = 'news_article' THEN
			(
				SELECT
					file_managed.uri
				FROM
					node
				INNER JOIN field_data_field_collection_content_banner ON field_data_field_collection_content_banner.entity_id = node.nid
				INNER JOIN field_data_field_content_banner_image ON field_data_field_content_banner_image.entity_id = field_data_field_collection_content_banner.field_collection_content_banner_value
				INNER JOIN file_managed ON file_managed.fid = field_data_field_content_banner_image.field_content_banner_image_fid
				WHERE
					node.nid = parentnid
			)
		WHEN node.type = 'gallery' THEN
			(
				SELECT
					file_managed.uri
				FROM
					node
				INNER JOIN field_data_field_collection_gallery ON field_data_field_collection_gallery.entity_id = node.nid
				INNER JOIN field_data_field_gallery_image ON field_data_field_gallery_image.entity_id = field_data_field_collection_gallery.field_collection_gallery_value
				INNER JOIN file_managed ON file_managed.fid = field_data_field_gallery_image.field_gallery_image_fid
				WHERE
					node.`status` = 1
				AND node.nid = parentnid
				ORDER BY
					field_data_field_gallery_image.delta ASC
				LIMIT 1
			)
		WHEN node.type = 'video' THEN
			field_data_field_video_youtube.field_video_youtube_video_id
		END AS `image`,

		 CASE /* Page Banner Title */
		WHEN node.type = 'page' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'gallery' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'video' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'news_article' THEN
			field_data_field_news_article_title.field_news_article_title_value
		END AS `image_title`,

		 CASE /* Page Banner Alt */
		WHEN node.type = 'page' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'gallery' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'video' THEN
			field_data_field_content_heading.field_content_heading_value
		WHEN node.type = 'news_article' THEN
			field_data_field_news_article_title.field_news_article_title_value
		END AS `image_alt`,

		 (
			SELECT
				country.title
			FROM
				node
			LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
			LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
			LEFT JOIN node AS country ON country.nid = field_data_field_categories_countries.field_categories_countries_target_id
			WHERE
				node.`status` = 1
			AND node.nid = parentnid
			LIMIT 1
		) AS `country_name`,

		 (
			SELECT
				field_data_field_categories_countries.field_categories_countries_target_id
			FROM
				node
			LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
			LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
			WHERE
				node.`status` = 1
			AND node.nid = parentnid
			LIMIT 1
		) AS `country_nid`,

		 (
			SELECT
				country_flag.uri
			FROM
				node
			LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
			LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
			LEFT JOIN node AS country ON country.nid = field_data_field_categories_countries.field_categories_countries_target_id
			LEFT JOIN field_data_field_collection_country ON field_data_field_collection_country.entity_id = country.nid
			LEFT JOIN field_data_field_country_flag AS country_flag_data ON country_flag_data.entity_id = field_data_field_collection_country.field_collection_country_value
			LEFT JOIN file_managed AS country_flag ON country_flag.fid = country_flag_data.field_country_flag_fid
			WHERE
				node.`status` = 1
			AND node.nid = parentnid
			LIMIT 1
		) AS `country_flag`

		FROM
			node
		LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
		LEFT JOIN field_data_field_categories_categories ON field_data_field_categories_categories.entity_id = field_data_field_collection_categories.field_collection_categories_value
		INNER JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_categories_categories.field_categories_categories_tid
		LEFT JOIN field_data_field_collection_content ON field_data_field_collection_content.entity_id = node.nid
		LEFT JOIN field_data_field_content_heading ON field_data_field_content_heading.entity_id = field_data_field_collection_content.field_collection_content_value
		LEFT JOIN field_data_field_content_body ON field_data_field_content_body.entity_id = field_data_field_collection_content.field_collection_content_value
		LEFT JOIN field_data_field_collection_newsarticle ON field_data_field_collection_newsarticle.entity_id = node.nid
		LEFT JOIN field_data_field_news_article_title ON field_data_field_news_article_title.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN field_data_field_news_article_date ON field_data_field_news_article_date.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN field_data_field_news_article_content ON field_data_field_news_article_content.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
		LEFT JOIN field_data_field_collection_gallery ON field_data_field_collection_gallery.entity_id = node.nid
		LEFT JOIN field_data_field_collection_video ON field_data_field_collection_video.entity_id = node.nid
		LEFT JOIN field_data_field_video_youtube ON field_data_field_video_youtube.entity_id = field_data_field_collection_video.field_collection_video_value
		LEFT JOIN field_data_field_taxonomy_image ON field_data_field_taxonomy_image.entity_id = taxonomy_term_data.tid
		LEFT JOIN file_managed AS taxonomy_image ON taxonomy_image.fid = field_data_field_taxonomy_image.field_taxonomy_image_fid
		WHERE
			node.`status` = 1
		ORDER BY 
			`date` DESC
		";	
	
	$results = db_query($query);
	
	if ($results->rowCount()) {
		$content = array();
		foreach ($results AS $result) {
			$content[$result->term_name][] = array(
				'term_name' => $result->term_name,
				'term_tid' => $result->term_tid,
				'taxonomy_image' => $result->taxonomy_image,
				'taxonomy_image_title' => $result->taxonomy_image_title,
				'taxonomy_image_alt' => $result->taxonomy_image_alt,
				'nid' => $result->parentnid,
				'type' => $result->type,
				'title' => $result->title,
				'heading' => $result->heading,
				'date' => $result->date,
				'body' => $result->body,
				'summary' => $result->summary,
				'image' => $result->image,
				'image_title' => $result->image_title,
				'image_alt' => $result->image_alt,
				'country_name' => $result->country_name,
				'country_nid' => $result->country_nid,
				'country_flag' => $result->country_flag,
			);
		}
		
		if (isset($content) && $content) {
			// Please see notes at top. Need limit on total grabbed.
			return $content;
		}
		
	}

}

function homepage_headlines() {
	/*
	 *	Output of homepage banner/headlines section.
	 *	Based on NID Reference within content type.
	 */
	
	$find_nids_query = "
		SELECT
			field_revision_field_headline_page.field_headline_page_target_id AS `headline_nid`
		FROM
		node
		INNER JOIN field_revision_field_collection_headline ON field_revision_field_collection_headline.entity_id = node.nid
		INNER JOIN field_revision_field_headline_page ON field_revision_field_headline_page.entity_id = field_revision_field_collection_headline.field_collection_headline_value		
		";
	
	$find_nids_result = db_query($find_nids_query);
	
	if ($find_nids_result->rowCount()) {
		$query = "
			SELECT DISTINCT
				taxonomy_term_data.`name` AS `term_name`,
				taxonomy_term_data.tid AS `term_tid`,
				node.nid AS `parentnid`,
				node.type,
				node.title,

				CASE /* Heading */
			WHEN node.type = 'page' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'video' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_title.field_news_article_title_value
			END AS `heading`,

			 CASE /* Date */
			WHEN node.type = 'page' THEN
				node.created
			WHEN node.type = 'gallery' THEN
				node.created
			WHEN node.type = 'video' THEN
				node.created
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_date.field_news_article_date_value
			END AS `date`,

			 CASE /* Body */
			WHEN node.type = 'page' THEN
				field_data_field_content_body.field_content_body_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_body.field_content_body_value
			WHEN node.type = 'video' THEN
				field_data_field_content_body.field_content_body_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_content.field_news_article_content_value
			END AS `body`,

			 CASE /* Summary */
			WHEN node.type = 'page' THEN
				field_data_field_content_body.field_content_body_summary
			WHEN node.type = 'gallery' THEN
				field_data_field_content_body.field_content_body_summary
			WHEN node.type = 'video' THEN
				field_data_field_content_body.field_content_body_summary
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_content.field_news_article_content_summary
			END AS `summary`,

			 CASE /* Page Banner */
			WHEN node.type = 'page' THEN
				(
					SELECT
						file_managed.uri
					FROM
						node
					INNER JOIN field_data_field_collection_content_banner ON field_data_field_collection_content_banner.entity_id = node.nid
					INNER JOIN field_data_field_content_banner_image ON field_data_field_content_banner_image.entity_id = field_data_field_collection_content_banner.field_collection_content_banner_value
					INNER JOIN file_managed ON file_managed.fid = field_data_field_content_banner_image.field_content_banner_image_fid
					WHERE
						node.nid = parentnid
				)
			WHEN node.type = 'news_article' THEN
				(
					SELECT
						file_managed.uri
					FROM
						node
					INNER JOIN field_data_field_collection_content_banner ON field_data_field_collection_content_banner.entity_id = node.nid
					INNER JOIN field_data_field_content_banner_image ON field_data_field_content_banner_image.entity_id = field_data_field_collection_content_banner.field_collection_content_banner_value
					INNER JOIN file_managed ON file_managed.fid = field_data_field_content_banner_image.field_content_banner_image_fid
					WHERE
						node.nid = parentnid
				)
			WHEN node.type = 'gallery' THEN
				(
					SELECT
						file_managed.uri
					FROM
						node
					INNER JOIN field_data_field_collection_gallery ON field_data_field_collection_gallery.entity_id = node.nid
					INNER JOIN field_data_field_gallery_image ON field_data_field_gallery_image.entity_id = field_data_field_collection_gallery.field_collection_gallery_value
					INNER JOIN file_managed ON file_managed.fid = field_data_field_gallery_image.field_gallery_image_fid
					WHERE
						node.`status` = 1
					AND node.nid = parentnid
					ORDER BY
						field_data_field_gallery_image.delta ASC
					LIMIT 1
				)
			WHEN node.type = 'video' THEN
				field_data_field_video_youtube.field_video_youtube_video_id
			END AS `image`,

			 CASE /* Page Banner Title */
			WHEN node.type = 'page' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'video' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_title.field_news_article_title_value
			END AS `image_title`,

			 CASE /* Page Banner Alt */
			WHEN node.type = 'page' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'gallery' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'video' THEN
				field_data_field_content_heading.field_content_heading_value
			WHEN node.type = 'news_article' THEN
				field_data_field_news_article_title.field_news_article_title_value
			END AS `image_alt`,

			 (
				SELECT
					country.title
				FROM
					node
				LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
				LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
				LEFT JOIN node AS country ON country.nid = field_data_field_categories_countries.field_categories_countries_target_id
				WHERE
					node.`status` = 1
				AND node.nid = parentnid
				LIMIT 1
			) AS `country_name`,

			 (
				SELECT
					field_data_field_categories_countries.field_categories_countries_target_id
				FROM
					node
				LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
				LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
				WHERE
					node.`status` = 1
				AND node.nid = parentnid
				LIMIT 1
			) AS `country_nid`,

			 (
				SELECT
					country_flag.uri
				FROM
					node
				LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
				LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
				LEFT JOIN node AS country ON country.nid = field_data_field_categories_countries.field_categories_countries_target_id
				LEFT JOIN field_data_field_collection_country ON field_data_field_collection_country.entity_id = country.nid
				LEFT JOIN field_data_field_country_flag AS country_flag_data ON country_flag_data.entity_id = field_data_field_collection_country.field_collection_country_value
				LEFT JOIN file_managed AS country_flag ON country_flag.fid = country_flag_data.field_country_flag_fid
				WHERE
					node.`status` = 1
				AND node.nid = parentnid
				LIMIT 1
			) AS `country_flag`

			FROM
				node
			LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
			LEFT JOIN field_data_field_categories_categories ON field_data_field_categories_categories.entity_id = field_data_field_collection_categories.field_collection_categories_value
			LEFT JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_categories_categories.field_categories_categories_tid
			LEFT JOIN field_data_field_collection_content ON field_data_field_collection_content.entity_id = node.nid
			LEFT JOIN field_data_field_content_heading ON field_data_field_content_heading.entity_id = field_data_field_collection_content.field_collection_content_value
			LEFT JOIN field_data_field_content_body ON field_data_field_content_body.entity_id = field_data_field_collection_content.field_collection_content_value
			LEFT JOIN field_data_field_collection_newsarticle ON field_data_field_collection_newsarticle.entity_id = node.nid
			LEFT JOIN field_data_field_news_article_title ON field_data_field_news_article_title.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
			LEFT JOIN field_data_field_news_article_date ON field_data_field_news_article_date.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
			LEFT JOIN field_data_field_news_article_content ON field_data_field_news_article_content.entity_id = field_data_field_collection_newsarticle.field_collection_newsarticle_value
			LEFT JOIN field_data_field_collection_gallery ON field_data_field_collection_gallery.entity_id = node.nid
			LEFT JOIN field_data_field_collection_video ON field_data_field_collection_video.entity_id = node.nid
			LEFT JOIN field_data_field_video_youtube ON field_data_field_video_youtube.entity_id = field_data_field_collection_video.field_collection_video_value
			WHERE
				node.`status` = 1";
		
		$query .= " AND ( ";

		$i=0;
		foreach ($find_nids_result AS $page_nid) {
			if ($i >= 1) {
				$query .= "
						OR `node`.`nid` = '{$page_nid->headline_nid}'
					";
			} else {
				$query .= " `node`.`nid` = '{$page_nid->headline_nid}' ";
			}
			 $i++;
		}
		
		$query .= ")";
		
		$query .= "
			ORDER BY 
				`date` DESC
			";	
		
		$results = db_query($query);

		if ($results->rowCount()) {
			$content = array();
			foreach ($results AS $result) {
				$content[] = array(
					'term_name' => $result->term_name,
					'term_tid' => $result->term_tid,
					'nid' => $result->parentnid,
					'type' => $result->type,
					'title' => $result->title,
					'heading' => $result->heading,
					'date' => $result->date,
					'body' => $result->body,
					'summary' => $result->summary,
					'image' => $result->image,
					'image_title' => $result->image_title,
					'image_alt' => $result->image_alt,
					'country_name' => $result->country_name,
					'country_nid' => $result->country_nid,
					'country_flag' => $result->country_flag,
				);
			}

			if (isset($content) && $content) {
				// Please see notes at top. Need limit on total grabbed.
				return $content;
			}
		}
		
	}
	
	
	
	
}

// PAGE FUNCTIONALITY ------------------------------------------------------------------

function page_category_output($nid) {
	/*
	 *	Find a pages categories based on NID. Used to find related Country & any Terms.
	 *	Used on all content types to output terms etc.
	 */
	
	// Find Terms
	$find_terms = "
		SELECT
			field_data_field_categories_categories.field_categories_categories_tid AS `tid`,
			taxonomy_term_data.`name`,
			taxonomy_term_data.description
		FROM
			node
		LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
		LEFT JOIN field_data_field_categories_categories ON field_data_field_categories_categories.entity_id = field_data_field_collection_categories.field_collection_categories_value
		LEFT JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_categories_categories.field_categories_categories_tid
		WHERE
			node.nid = '{$nid}'	
		";
		
	$terms = db_query($find_terms);	
	
	if ($terms->rowCount()) {
		$categories = array();
		foreach ($terms AS $term) {
			// dump into array for return
			if ($term->tid != NULL) {
				$categories['terms'][] = array(
					'tid' => $term->tid,
					'name' => $term->name,
					'desc' => $term->description,
				);
			}
			
 		}
	}
	
	// Find Countries
	$find_country_nid = "
		SELECT
			field_data_field_categories_countries.field_categories_countries_target_id AS `nid`
		FROM
			node
		LEFT JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
		LEFT JOIN field_data_field_categories_countries ON field_data_field_categories_countries.entity_id = field_data_field_collection_categories.field_collection_categories_value
		WHERE
			node.nid = '{$nid}'	
		";
			
	$country_nids = db_query($find_country_nid);	
	
	if ($country_nids->rowCount()) {
		foreach ($country_nids AS $country_nid) {
			// dump into array for mass query.
			$countriesnids[] = " node.`nid` = " . "'" . $country_nid->nid . "'";
		}
		
		if (is_array($countriesnids)) {
			
			$find_countries = "
				SELECT
					field_data_field_country_heading.field_country_heading_value AS `heading`,
					node.nid,
					node.title,
					file_managed.uri AS `image`, 
					field_data_field_country_flag.field_country_flag_alt AS `image_alt`,
					field_data_field_country_flag.field_country_flag_title AS `image_title`
				FROM
					node
				LEFT JOIN field_data_field_collection_country ON field_data_field_collection_country.entity_id = node.nid
				LEFT JOIN field_data_field_country_heading ON field_data_field_country_heading.entity_id = field_data_field_collection_country.field_collection_country_value
				LEFT JOIN field_data_field_country_flag ON field_data_field_country_flag.entity_id = field_data_field_collection_country.field_collection_country_value
				INNER JOIN file_managed ON file_managed.fid = field_data_field_country_flag.field_country_flag_fid
				WHERE
					node.`status` = 1
				";
			
			$find_countries .= ' AND ( ' . implode(' OR ', $countriesnids) . ' ) ';
		
			$countries = db_query($find_countries);	
			
			if ($countries->rowCount()) {
				foreach ($countries AS $country) {
					$categories['countries'][] = array(
						'nid' => $country->nid,
						'heading' => $country->heading,
						'title' => $country->title,
						'image' => $country->image,
						'image_alt' => $country->image_alt,
						'image_title' => $country->image_title,
					);
				}
			}
			
		}
		
	}
	
	// Return
	if (is_array($categories) && $categories != NULL) {
		return $categories;
	}	 
	
}

function get_page_video($nid) {
	/*
	 *	get a related video, as well as thumbnail.
	 *	Used on VIDEO page itself. Nothing fancy.
	 */
	
	$video_query = "
		SELECT
			field_data_field_video_youtube.field_video_youtube_video_id
		FROM
			node
		INNER JOIN field_data_field_collection_video ON field_data_field_collection_video.entity_id = node.nid
		INNER JOIN field_data_field_video_youtube ON field_data_field_video_youtube.entity_id = field_data_field_collection_video.field_collection_video_value
		WHERE
			node.nid = '{$nid}'
		";
			
	$video_data = db_query($video_query)->fetchField();	
	
	if ($video_data) {
		$video = array(
			'video_id' => $video_data,
			'thumbnail' => 'http://img.youtube.com/vi/'.$video_data.'/hqdefault.jpg',
		);
		
		return $video;
	}
	
}

function get_page_image_list($node_type) {
	$sectors_query = "
		SELECT
		`node`.`nid`,
		field_data_field_content_alt_title.field_content_alt_title_value AS heading,
		field_data_field_content_body.field_content_body_value AS content,
		`node`.`title`,
		field_data_field_page_image.field_page_image_title AS `image_title`,
		field_data_field_page_image.field_page_image_alt AS `image_alt`,
		file_managed.`uri`,
			(	
				SELECT
					menu_links.weight
				FROM
					menu_links
				WHERE
					link_path LIKE CONCAT('node/', `nid`)
			) AS weight
		FROM
			node
		LEFT JOIN field_data_field_collection_content ON field_data_field_collection_content.entity_id = node.nid
		LEFT JOIN field_data_field_content_alt_title ON field_data_field_content_alt_title.entity_id = field_data_field_collection_content.field_collection_content_value
		LEFT JOIN field_data_field_content_body ON field_data_field_content_body.entity_id = field_data_field_collection_content.field_collection_content_value
		LEFT JOIN field_data_field_collection_page_image ON field_data_field_collection_page_image.entity_id = node.nid
		LEFT JOIN field_data_field_page_image ON field_data_field_page_image.entity_id = field_data_field_collection_page_image.field_collection_page_image_value
		LEFT JOIN file_managed ON file_managed.fid = field_data_field_page_image.field_page_image_fid
		WHERE
			node.`status` = 1 AND 
			node.type = '{$node_type}'
		ORDER BY
			`weight` ASC
		";
	
	$sectors_result = db_query($sectors_query)->fetchAll();
	 if ($sectors_result[0]->uri != NULL) {
		return $sectors_result;
	 }
	
}

function get_banners($nid) {
	$banner_query = "
		SELECT
			field_data_field_banner_image.field_banner_image_alt AS `alt`,
			field_data_field_banner_image.field_banner_image_title AS `title`,
			file_managed.uri
		FROM
			node
		LEFT JOIN field_data_field_collection_banners ON field_data_field_collection_banners.entity_id = node.nid
		LEFT JOIN field_data_field_banner_image ON field_data_field_banner_image.entity_id = field_data_field_collection_banners.field_collection_banners_value
		LEFT JOIN file_managed ON file_managed.fid = field_data_field_banner_image.field_banner_image_fid
		WHERE
			node.nid = '{$nid}'
		";
			
	$banner_result = db_query($banner_query)->fetchAll();
	
	if ($banner_result[0]->uri != NULL) {
		return $banner_result;
	}
			
}

// GALLERY FUNCTIONALITY ---------------------------------------------------------------

function get_gallery_items($nid) {
	/*
	 *  Fetch a list of gallery items related to a NID.
	 */
	
	$image_query = "
		SELECT
			field_data_field_gallery_image.field_gallery_image_alt,
			field_data_field_gallery_image.field_gallery_image_title,
			file_managed.uri,
			field_data_field_gallery_image_desc.field_gallery_image_desc_value,
			field_data_field_collection_gallery.delta
		FROM
			node
		INNER JOIN field_data_field_collection_gallery ON field_data_field_collection_gallery.entity_id = node.nid
		INNER JOIN field_data_field_gallery_image ON field_data_field_gallery_image.entity_id = field_data_field_collection_gallery.field_collection_gallery_value
		INNER JOIN file_managed ON file_managed.fid = field_data_field_gallery_image.field_gallery_image_fid
		LEFT JOIN field_data_field_gallery_image_desc ON field_data_field_gallery_image_desc.entity_id = field_data_field_collection_gallery.field_collection_gallery_value
		WHERE
			node.nid = '{$nid}'
		ORDER BY
			field_data_field_collection_gallery.delta ASC
		";
			
		$image_data = db_query($image_query);
		
		if ($image_data->rowCount()) {
			$images = array();
			foreach ($image_data AS $image) {
				$images[] = array(
					'image' => $image->uri,
					'image_alt' => $image->field_gallery_image_alt,
					'image_title' => $image->field_gallery_image_title,
					'desc' => $image->field_gallery_image_desc_value
				);
			}
			
			if (is_array($images)) {
				return $images;
			}
			
		}
	
}

// FOOTER FUNCTIONALITY --------------------------------------------------------------

function footer_menu_countries() {
	/*
	 *	Output a list of countries currently present for menu.
	 * 
	 *	TO-DO:
	 *		Count total, divide by 3 for 3 menus.
	 */
	
	$query = "
		SELECT
			node.nid,
			field_data_field_country_heading.field_country_heading_value,
			node.title,
			field_data_field_country_flag.field_country_flag_alt,
			field_data_field_country_flag.field_country_flag_title,
			file_managed.uri
		FROM
			node
		INNER JOIN field_data_field_collection_country ON field_data_field_collection_country.entity_id = node.nid
		INNER JOIN field_data_field_country_heading ON field_data_field_country_heading.entity_id = field_data_field_collection_country.field_collection_country_value
		INNER JOIN field_data_field_country_flag ON field_data_field_country_flag.entity_id = field_data_field_collection_country.field_collection_country_value
		INNER JOIN file_managed ON file_managed.fid = field_data_field_country_flag.field_country_flag_fid
		WHERE
			node.`status` = 1
		ORDER BY
			node.title,
			field_data_field_country_heading.field_country_heading_value ASC
		";
	
	$results = db_query($query);
	
	if ($results->rowCount()) {
		$countries = array();
		
		foreach ($results AS $result) {

				$countries[] = array(
					'image' => $result->uri,
					'image_alt' => $result->field_country_flag_alt,
					'image_title' => $result->field_country_flag_title,
					'title' => $result->title,
					'heading' => $result->field_country_heading_value,
					'nid' => $result->nid
				);
	
		}
		
		/*
		 *	Split the countries into 3 rows.
		 */
			
		$split = array(
			1 => array(),
			2 => array(),
			3 => array(),
		);
		
		$i = 1;
		foreach($countries as $country) {
			$split[$i][] = $country;
			
			if ($i ==3) {
				$i = 1;
			}
			else {
				$i++;
			}
			
		}
		
		return $split;
		
	}
	
}

function footer_menu_terms() {
	/*
	 *	Grab all CATEGORIES for content, output as TID for LISTING page.
	 *	Query runs through NODE first to ensure;
	 *		1) content exists with the term
	 *		2) it's accessable
	 *	This should help avoid blank pages with no content as TID is generated.
	 */
	
	$tid_query = "
		SELECT DISTINCT
			taxonomy_term_data.`name`,
			taxonomy_term_data.tid
		FROM
			node
		INNER JOIN field_data_field_collection_categories ON field_data_field_collection_categories.entity_id = node.nid
		INNER JOIN field_data_field_categories_categories ON field_data_field_categories_categories.entity_id = field_data_field_collection_categories.field_collection_categories_value
		INNER JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_categories_categories.field_categories_categories_tid
		WHERE
			node.`status` = 1
		";
	
	$tid_results = db_query($tid_query);
	if ($tid_results->rowCount()) {
		$tid_data = array();
		foreach ($tid_results AS $tid_result) {
			$tid_data[] = array(
				'tid' => $tid_result->tid,
				'name' => $tid_result->name
			);
		}
		
		if ($tid_data) {
			return $tid_data;
		}
		
	}
	
}

// GENERAL FUNCTIONALITY --------------------------------------------------------------

function limit_word_count($text, $limit) {
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos = array_keys($words);
		$text = substr($text, 0, $pos[$limit]) . '...';
	}
	return $text;
}

function subscriber_content($node_id, $user_id) {
	/*
	 *	Content types contain 'field_subscriber_only' as an (int) select field. 0=FALSE, 1=TRUE.
	 *	Usage is as follows;
	 * 
	 *		Wrap content inside:
	 *			 if (subscriber_content($node->nid, $user->uid)) :
	 * 
	 *		Close with:
	 *			else:
	 *				drupal_goto('node/98');
	 *			endif;
	 *	
	 *	Else can contain anything you would rather the page do. Function returns true or false.
	 * 
	 */
	
	if ($user_id == 1) {
		// Admin role.
		return TRUE;
		exit;
	}
	
	$access = db_query("
		SELECT
			field_data_field_subscriber_only.field_subscriber_only_value AS `allow_access`,
			(
				SELECT
					role.`name`
				FROM
					users
				LEFT JOIN users_roles ON users_roles.uid = users.uid
				INNER JOIN role ON role.rid = users_roles.rid
				WHERE
					users.uid = :uid
			) AS `role`
		FROM
			node
		LEFT JOIN field_data_field_collection_subscriber ON field_data_field_collection_subscriber.entity_id = node.nid
		LEFT JOIN field_data_field_subscriber_only ON field_data_field_subscriber_only.entity_id = field_data_field_collection_subscriber.field_collection_subscriber_value
		WHERE
			node.nid = :nid	
		", array(
			':uid' => $user_id,
			':nid' => $node_id
			))->fetchAll();	
	
	if ($access[0]->allow_access == 0) {
		return TRUE;
	} else if ($access[0]->role == 'Subscriber' && $access[0]->allow_access == 1) {
		return TRUE;
	} else {
		return FALSE;
	}
	
}