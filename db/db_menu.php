<body>
<?
include('menu_func.php');
$menu = get_menu();?>
<ul><?foreach($menu as $item):
$submenu = get_submenu($item['link']);
?>
	<li><a href="db_menu.php?view=<?=$item['link'];?>"><?=$item['title'];?></a></li>
	<?if(!empty($submenu))
    {
        echo "<ul>";
        foreach($submenu as $item2):?>
        <li><a href="db_menu.php?view=<?=$item['link'];?>&amp;t=<?=$item2['link'];?>"><?=$item2['title'];?></a></li>
	<?endforeach;
        echo "</ul>";
    }?><?endforeach;?></ul>
</body>