<?php 

function get_images($dir1){
    $files = scandir($dir1);
    if(!$files) return false;
    $pattern = "#\.(jpe?g|png|gif)$#";
    foreach($files as $key => $file){
        if(!preg_match($pattern, $file)){
            unset($files[$key]);  
        } 
    }
    $files = array_merge($files);
    return $files;
}

function pagination($page, $count_pages, $modrew = true){
    $back = null;
    $forward = null;
    $startpage = null;
    $endpage = null;
    $page2left = null;
    $page1left = null;
    $page2right = null;
    $page1right = null;

    $uri = "?";
    if(!$modrew){
        if( $_SERVER['QUERY_STRING']){
            foreach($_GET as $key => $value) {
                if($key != 'page') $uri .= "{$key}=$value&amp;";
            }
        }
    }else{
        $url = $_SERVER['REQUEST_URI'];
        $url = explode("?", $url);
        if(isset($url[1]) && $url[1] != '') {
            $params = explode("&", $url[1]);
            foreach($params as $param){
                if(!preg_match("#page=#", $param)) $uri .= "{$param}
                &amp;";
            }
        }
    }
    if($page > 1){
        $back = "<a class='nav-link' data-page='" .($page-1)."' href='{$uri}page=" .($page-1). "'>&lt;</a>";
    }

    if($page < $count_pages){
        $forward = "<a class='nav-link' data-page='" .($page+1)."' href='{$uri}page=" .($page+1). "'>&gt;</a>";
    }

    if($page > 3){
        $startpage = "<a class='nav-link' data-page='1' href='{$uri}page=1'> &laquo;</a>";
    }
    if($page < ($count_pages - 2)){
        $endpage = "<a class='nav-link' data-page='" .$count_pages."' href='{$uri}page={$count_pages}'>&raquo;</a>";
    }
    if($page - 2 > 0){
        $page2left = "<a class='nav-link' data-page='" .($page-2)."' href='{$uri}page=" .($page-2). "'>" .($page-2). "</a>";
    }
    if($page - 1 > 0){
        $page1left = "<a class='nav-link' data-page='" .($page-1)."' href='{$uri}page=" .($page-1). "'>" .($page-1). "</a>";
    }
    if($page + 1 <= $count_pages){
        $page1right = "<a class='nav-link' data-page='" .($page+1)."' href='{$uri}page=" .($page+1). "'>" .($page+1). "</a>";
    }
    if($page + 2 <= $count_pages){
        $page2right = "<a class='nav-link' data-page='" .($page+2)."' href='{$uri}page=" .($page+2). "'>" .($page+2). "</a>";
    }

    return $startpage.$back.$page2left.$page1left.'<a class="nav-active">'.$page.'</a>'.$page1right.$page2right.$forward.$endpage;
}


?>