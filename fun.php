<?php
    include 'config.php';
    
    #个人信息
    function getLeftDes() {
    global $left_des;
    foreach ($left_des as $item){
        $desc = $item['desc'];
        $icon = $item['icon'];
        echo "
        <div class='left-des-item'>
			<i class='icon iconfont icon-$icon'></i>
			$desc
		</div>
        ";
    }
}
    
    #个人标签
    function getLeftTag() {
        global $left_tag;
        foreach ($left_tag as $item){
            echo "<div class='left-tag-item'>$item</div>";
        }
    }
    
    #时间线
    function getLeftTime() {
        global $left_time;
        foreach ($left_time as $key => $item){
            echo "
            <li>
    			<div class='focus'></div>
    			<div>$item
    			</div>
    			<div>$key</div>
    		</li>
    		";
        }
    }
    
    #获取网站或项目
    function getSiteProjectList($type = 'site') {
        if ($type == 'site') {
            global $site;
            $data = $site;
        }else{
            global $project;
            $data = $project;
        }
        
        
        foreach ($data as $item){
            $url = $item['url'];
            $title = $item['title'];
            $desc = $item['desc'];
            $icon = $item['icon'];
            echo "
    <a class='projectItem a' target='_blank' href='$url'>
    						<div class='projectItemLeft'>
    							<h1>$title</h1>
    							<p>$desc</p>
    						</div>
    						<div class='projectItemRight'>
    							<i style = 'font-size: 30px;' class='iconfont icon-$icon'></i>
    						</div>
    					</a>
    		";
        }
    }
    
    #个人技能
    function getSkill() {
        global $skill;
        foreach ($skill as $item){
            $skill = $item['skill'];
            $tip = $item['tip'];
            $rate = $item['rate'];
            echo "
            <li>
                <p class='mimic_outer'>$skill</p>
                <div data-tip='$tip' class='progress mimic_outer'>
                    <div class='mimic_outer' style='width: $rate%;'></div>
                </div>
            </li>
    		";
        }
    }