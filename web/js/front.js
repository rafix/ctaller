(function($)
{
  $(function()
  {
    $('.clickable').each(function() {
      $(this).click(function() {
        location.href = $(this).find('a:first').attr('href');
      }).hover(function() {
        $(this).addClass('hover');
      }, function() {
        $(this).removeClass('hover');
      });
    });

  if($dataTable = $('div.beca_list table.data_table').orNot())
    {
      $dataTable.dataTable({
        bJQueryUI: true,
        sPaginationType: "full_numbers",
        aaSorting: [ [0, "desc"] ],

        "oLanguage": {
			"sLengthMenu": "Mostrar _MENU_ registros",
                        "sSearch": "Buscar:",
			"sZeroRecords": "No hay resultados",
			"sInfo": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
			"sInfoEmpty": "No hay registros para mostrar",
			"sInfoFiltered": "(filtrado de un total de _MAX_ registros)"
		}

      });
    }

    if($dataTable = $('div.artist_list table.data_table').orNot())
    {
      $dataTable.dataTable({
        bJQueryUI: true,
        sPaginationType: "full_numbers",
        aaSorting: [ [1, "asc"] ],

        "oLanguage": {
			"sLengthMenu": "Mostrar _MENU_ registros",
                        "sSearch": "Buscar:",
			"sZeroRecords": "No hay resultados",
			"sInfo": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
			"sInfoEmpty": "No hay registros para mostrar",
			"sInfoFiltered": "(filtrado de un total de _MAX_ registros)"
		}

      });
    }

  // for a Grid
  var $grid = $('.gallery ol.pictures');
  // only if elements in gallery
  if($grid.find('>li').length) {
    $grid.find('>li>a').colorbox({height:"95%"});
  }


  $('div.artist_show div.tabs').each(function()
    {
      $(this).tabs({

      });
    });

 }); 
})(jQuery);