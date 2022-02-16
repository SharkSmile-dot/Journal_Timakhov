<?php

class View
{
	
	
	
	
	function generate($content_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		
		/*
		динамически подключаем общий шаблон (вид),
		внутри которого будет встраиваться вид
		для отображения контента конкретной страницы.
		*/
		include( 'application/views/'.$template_view );
	}
}
