<?php
	defined("_JEXEC") or die();
	
	require_once __DIR__.'/helper.php';
	
	//1. Создадим экземпляр класса
	$db=&JFactory::getDBO();
	//2. Создадим запрос к базе данных, в данном случае мы выбираем статьи
	$sql = 'SELECT id,title, alias FROM exm01_k2_items WHERE catid=9 AND published = 1 AND trash = 0 ORDER BY id DESC LIMIT 4 ';
	//3. Установим этот запрос в экземпляр класса работы с базами данных
	$db->setQuery($sql);
	//4.  Выполним запрос
	//$db->query();
//	$data_row = $db->loadRow();
	//5. Посмотрим  сколько было задействовано строк
	//echo $db->getAffectedRows ();
//	print_r($data_row);
	
//	$datavalue = $db->loadResult();
//	print_r($datavalue);

	
	$data_rows_assoc_list = $db->loadAssocList();
 	//5. Посмотрим  что нам вернул этот метод
//	print_r($data_rows_assoc_list);
//	echo "<br>" . $data_rows_assoc_list[0][id];
?>

<style>
	*{
		margin:0px;
		padding:0px;
	}
	#footer{
		width:100%;
		height:440px;
		background-color:#f5f5f8;
		font-family: Arimo,sans-serif;
	}
	#first-col, #second-col, #three-col, #four-col{
		height:220px;
		float:left;
		margin-top: 25px;
	    padding-left: 40px;
	}
	#first-col{
		width:25%;
		padding-left: 80px;
	}
	#second-col{
		width:22%;
	    margin-left: -25px;
	}
	#three-col{
		width:20%;
	    padding-left: 130px;
	}
	#four-col{
		width:22%;
		padding-left: 140px !important;
	}
	#first-col-auto{
		margin-left: 40px;
	}
	#second-col-auto{
		margin:auto;
		width:100%;
	}
	#first-col-auto div{
		margin-bottom: 10px;
	}
	#second-col-auto div{
		margin-bottom: 11px;
	}
	#first-col-auto div a{
		text-transform: initial;
		color: #2c5dd8;
		line-height: 24px;
		font-size: 20px;
		text-decoration:none;
	}
	#second-col-auto div a{
		text-transform: initial;
		color: #2c5dd8;
		line-height: 30px;
		font-size: 19px;
		text-decoration:none;
	}
	.second-col-auto-first{
		line-height: 35px !important;
		font-size: 26px !important;
	}
	#three-col-auto{
		font-size: 21px;
		margin-left: 16px;
	}
	#three-col-auto ul li{
		list-style: none;
	    margin-bottom: 15px;
	}
	#three-col-auto ul li a{
		text-decoration:none;
		color: #2c5dd8;
	}
	#three-col-auto p{
	    margin-bottom: 10px;
		color: #2c5dd8;
	}
	#four-col div, .four-col ul li p a, .four-col ul li a, #four-col div a{
		color: #2c5dd8;
		text-decoration:none;
		margin-bottom: 20px;
	}
	.four-col div a, .four-col ul{
		float:left;
	}
	.four-col, .four-col .socseti{
		clear:both;
	}
	.footer-mail{
		clear:both;
	}
	#second-col-auto div p, #first-col #first-col-auto div p{
	    font-size: 21px;
		font-weight: 600;
		margin-top: -10px;
	}
	#second-col-auto ul li a{
		font-size: 19px;
		color: #2c5dd8 !important;
	}
	.vopros{
		margin-top: 10px !important;
	}
	.color-black{
		color:#000;
	}
	#four-col #logo{
	    margin-top: -44px;
	}
	#four-col #logo a img{
		width: 200px;
	}
	.socseti{
		margin-top: -35px;
	}
	.socseti a{
		float:left;
	}
	.socseti a img{
		width:40px;
		margin-right:5px;
	}

</style>

<div id="footer">
	<div id="four-col">
		<div id="logo">
			<a href="/"><img alt="logo" class="logo" src="/images/blog/logo-2.png" title="ExpertMusic — доверьте музыкальное оформление вашего бизнеса профессионалам"></a>
		</div>
		<div class="socseti">
			<a href="https://www.facebook.com/expertmusicnet/" rel="nofollow" target="_blank">
				<img class="" src="/modules/mod_blogmaterial/assets/img/facebook.png">
			</a>
			<a href="https://twitter.com/Expertmusicnet" rel="nofollow" target="_blank">
				<img class="" src="/modules/mod_blogmaterial/assets/img/twitter.png">
			</a>
			<a href="https://www.linkedin.com/company/indoormedia" rel="nofollow" target="_blank">
				<img class="" src="/modules/mod_blogmaterial/assets/img/linkedin.png">
			</a>
			<a href="https://www.youtube.com/channel/UC2KaFB7GY5R61rRRL_2oo9w/featured" rel="nofollow" target="_blank">
				<img class="" src="/modules/mod_blogmaterial/assets/img/youtube.png">
			</a>
			<a href="https://plus.google.com/+ExpertmusicNet" rel="nofollow" target="_blank">
				<img class="" src="/modules/mod_blogmaterial/assets/img/g+.png">
			</a>
		</div>
		<div class="footer-mail">
			<p><span class="color-black">Электронная почта:</span> 
				<span itemprop="email">
					<span id="cloak193331b301f67fc8a7b46ebbe38994de"><a href="mailto:info@expertmusic.net">info@expertmusic.net</a></span>
					<script type="text/javascript">
						document.getElementById('cloak193331b301f67fc8a7b46ebbe38994de').innerHTML = '';
						var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
						var path = 'hr' + 'ef' + '=';
						var addy193331b301f67fc8a7b46ebbe38994de = '&#105;nf&#111;' + '&#64;';
						addy193331b301f67fc8a7b46ebbe38994de = addy193331b301f67fc8a7b46ebbe38994de + '&#101;xp&#101;rtm&#117;s&#105;c' + '&#46;' + 'n&#101;t';
						var addy_text193331b301f67fc8a7b46ebbe38994de = '&#105;nf&#111;' + '&#64;' + '&#101;xp&#101;rtm&#117;s&#105;c' + '&#46;' + 'n&#101;t';document.getElementById('cloak193331b301f67fc8a7b46ebbe38994de').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy193331b301f67fc8a7b46ebbe38994de + '\'>'+addy_text193331b301f67fc8a7b46ebbe38994de+'<\/a>';
					</script>
				</span>
			</p>
		</div>
		<div>
			<p class="color-black"><strong>Польша:</strong> <span itemprop="telephone">&nbsp;+48 660-362-868</span></p>
			<p class="color-black"><strong>Россия:</strong> <span itemprop="telephone">&nbsp;+7 499 346-42-50</span></p>
			<p class="color-black"><strong>Украина:</strong> <span itemprop="telephone">&nbsp;+380 44 290-95-52</span></p>
		</div>
		<div style="clear:both;"><span class="color-black">©&nbsp; 2017</span> <a href="https://expertmusic.net/">ExpertMusic</a><br><span class="color-black">Все права защищены</span></div>
	</div>
	<div id="first-col">
		<div id="first-col-auto">
			<div><p>Разделы сайта</p></div>
			<div><a href="#">Продукты и услуги</a></div>
			<div><a href="#">Для заведений</a></div>
			<div><a href="#">Для продакшена</a></div>
			<div><a href="#">Музыка</a></div>
			<div><a href="#">Клиенты</a></div>
			<div><a href="#">Партнеры</a></div>
			<br>
			<div><a href="/privacy/">Конфиденциальность</a></div>
			<div><a href="/terms/">Условия использования</a></div>
			<div><a href="#">Карта сайта</a></div>
		</div>
	</div>
	<div id="second-col">
		<div id="second-col-auto">
			<div><p>Популярное в блоге</p></div>
			<?php
				foreach($data_rows_assoc_list as $key => $value){
					echo "<div><a href='/biznes/blog/". $value['alias'] ."/'>" . $value['title'] . "</a></div>";
				}
			?>
		</div>
	</div>
	<div id="three-col">
		<div id="second-col-auto">
			<div><p>Информация</p></div>
			<ul class="kompaniya-url">
				<li><a href="/o-kompanii/">О компании</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="#">Карьера</a></li>
				<li><a href="#">Заказать звонок</a></li>
			</ul>
		</div>
		<div id="second-col-auto">
			<div><p class="vopros">Задать вопрос эксперту:</p></div>
			<ul>
				<li><a href="/zadat-vopros-dlya-biznesa?editor" rel="noindex, nofollow">Музредактор</a></li>
				<li><a href="/zadat-vopros-dlya-biznesa?it" rel="noindex, nofollow">IT-специалист</a></li>
				<li><a href="/zadat-vopros-dlya-biznesa?lawyer" rel="noindex, nofollow">Юрист</a></li>
			</ul>
		</div>
	</div>
</div>