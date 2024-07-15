<?php include 'config.php';?>
<?php include 'fun.php';?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $site_name; ?> - 个人主页</title>
	<link rel="icon" href="./static/img/favicon.png">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="./static/css/style.css">
	<link rel="stylesheet" href="./static/css/root.css">
	<link rel="stylesheet" href="./static/css/iconfont.css">

</head>

<body>
	<div id="loading">
		<div id="loading-center">
		</div>
	</div>
	<div class="filter">
	    <canvas class="vh-bg" width="1920" height="1080"></canvas>
	</div>

	<div class="main">
		<div class="left">
			<div class="logo" style="background-image: url(./static/img/logo.png);">
				<img style="position: absolute;top:-15%;left:-10%;width: 120%; aspect-ratio: 1/1;"
					src="./static/img/logokuang.png">
			</div>
			<div class="left-div left-des">
				<?php getLeftDes(); ?>
			</div>
			<div class="left-div left-tag">
			    <?php getLeftTag(); ?>
			</div>
			<div class="left-div left-time">
				<ul id="line">
					<?php getLeftTime(); ?>
				</ul>
			</div>
		</div>
		<div class="right">
			<header>
				<div class="index-logo" style="background-image: url(./static/img/logo.png);">
					<img style="position: absolute;top:-15%;left:-10%;width: 120%; aspect-ratio: 1/1;"
						src="./static/img/logokuang.png">
				</div>
				<div class="welcome">
					Hello I' m <span class="gradientText"><?php echo $name; ?> </span>
				</div>
				<div class="description">👦 <span class="purpleText">Full Stack</span> Developer
				</div>
				<div class="description">📝 The only way to do <span class="purpleText textBackground">great</span> is
					to <span class="purpleText textBackground">love</span> what you do. </div>

				<div class="iconContainer">
					<a class="iconItem" onclick="" target="_blank" href="<?php echo $github; ?>">
						<i class="iconfont icon-github"></i>
						<div class="iconTip">Github</div>
					</a><a class="iconItem" onclick="" href="mailto:<?php echo $mail; ?>">
						<i class="iconfont icon-envelope"></i>
						<div class="iconTip">Mail</div>
					</a><a class="iconItem" onclick="pop('./static/img/ds.png')" href="javascript:void(0)">
						<svg t="1705247464964" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4987" >
                            <path d="M995.575172 725.451034c-12.358621-26.835862-38.488276-64.794483-92.689655-94.27862-62.146207-33.721379-136.297931-40.96-208.860689-20.303448l-99.928276 28.424827-279.304828-126.057931H22.775172v489.401379h509.704828l432.375172-195.266207c15.006897-6.708966 26.835862-19.42069 32.662069-34.957241 5.649655-15.36 4.943448-31.955862-1.942069-46.962759z m-482.162758 188.910345H111.051034V601.688276h184.673104l166.664828 75.387586-3.354483 0.882759h-170.372414v88.275862H471.393103l246.819311-70.267586c49.434483-14.124138 101.517241-9.357241 142.653793 12.888275 18.184828 9.886897 30.72 20.833103 39.371034 30.896552l-386.824827 174.609655z"  p-id="4988"></path>
                            <path d="M695.437241 163.486897l58.615173-142.30069h-397.24138l66.736552 143.36c-121.82069 53.142069-207.095172 174.433103-207.095172 315.674483 0 28.601379 3.531034 57.202759 10.593103 84.744827l85.627586-21.715862c-5.12-20.48-7.768276-41.666207-7.768275-63.028965 0-141.241379 114.758621-256 256-256s256 114.758621 256 256c0 51.023448-14.830345 100.104828-43.078621 142.300689l73.268965 49.08138c37.958621-56.673103 58.085517-122.88 58.085518-191.382069-0.176552-141.947586-86.686897-264.121379-209.743449-316.733793zM467.508966 91.983448h180.965517l-21.009655 50.846897a348.16 348.16 0 0 0-66.913104-6.708966c-23.834483 0-46.962759 2.471724-69.384827 7.062069l-23.657931-51.2z"  p-id="4989"></path>
                            <path d="M683.431724 427.431724v-70.62069h-38.311724l30.190345-30.190344-49.964138-49.964138-62.49931 62.49931h-6.002759L494.344828 276.656552l-49.787587 49.964138 30.013793 30.190344h-38.311724v70.62069h88.275862v35.310345h-88.275862v70.62069h88.275862v52.965517h70.62069v-52.965517h88.275862v-70.62069h-88.275862v-35.310345z"  p-id="4990"></path>
                        </svg>
						<div class="iconTip">赞助</div>
					</a>
					<a class="iconItem" target="_blank" href="<?php echo $QQ; ?>">
						<i class="iconfont icon-qq"></i>
						<div class="iconTip">QQ</div>
					</a>  <a class="switch" href="javascript:void(0)">
						<div class="onoffswitch">
							<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"
								checked>
							<label class="onoffswitch-label" for="myonoffswitch">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</a>
				</div>

				<div class="tanChiShe">
					<img id="tanChiShe" src="./static/svg/snake-Light.svg" alt="">
				</div>
			</header>

			<content>
				<div class="title"><svg t="1705257422086" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1891" >
                        <path d="M629.333333 202.666667v213.333333h277.333334v448h-512v-213.333333h-277.333334v-448h512z m213.333334 277.333333h-213.333334v170.666667h-170.666666v149.333333h384v-320z m-277.333334-213.333333h-384v320h213.333334v-170.666667h170.666666v-149.333333z m0 213.333333h-106.666666v106.666667h106.666666v-106.666667z"  p-id="1892"></path>
                    </svg>site </div>
				<div class="projectList">
				    
				    <?php getSiteProjectList('site'); ?>
					
					</div>
				<div class="title"><svg t="1705257422086" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1891" >
                        <path d="M629.333333 202.666667v213.333333h277.333334v448h-512v-213.333333h-277.333334v-448h512z m213.333334 277.333333h-213.333334v170.666667h-170.666666v149.333333h384v-320z m-277.333334-213.333333h-384v320h213.333334v-170.666667h170.666666v-149.333333z m0 213.333333h-106.666666v106.666667h106.666666v-106.666667z"  p-id="1892"></path>
                    </svg>project </div>
				<div class="projectList">
				    
				    <?php getSiteProjectList('project'); ?>
				    
					</div>
			
			
				<div class="title">
					<svg t="1705257823317" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7833" >
                        <path d="M395.765333 586.570667h-171.733333c-22.421333 0-37.888-22.442667-29.909333-43.381334L364.768 95.274667A32 32 0 0 1 394.666667 74.666667h287.957333c22.72 0 38.208 23.018667 29.632 44.064l-99.36 243.882666h187.050667c27.509333 0 42.186667 32.426667 24.042666 53.098667l-458.602666 522.56c-22.293333 25.408-63.626667 3.392-54.976-29.28l85.354666-322.421333zM416.714667 138.666667L270.453333 522.581333h166.869334a32 32 0 0 1 30.933333 40.181334l-61.130667 230.954666 322.176-367.114666H565.312c-22.72 0-38.208-23.018667-29.632-44.064l99.36-243.882667H416.714667z"  p-id="7834"></path>
                    </svg>
					skills
				</div>
				<div class="skill">
					<!--<img id="skillPc" src="./static/svg/skillPc.svg" alt="" srcset="">-->
					<!--<img id="skillWap" src="./static/svg/skillWap.svg" alt="" srcset="">-->
					<ul class="technology mimic_internal">
					    <?php getSkill(); ?>
                    </ul>
				</div>
			</content>
		</div>
	</div>
	<div class="tc">
		<div onclick="" class="tc-main">
			<img class="tc-img" src="" alt="" srcset="">
		</div>

	</div>
</body>
<script src="./static/js/script.js"> </script>
<script src="./static/js/main.min.js"></script>

</html>
