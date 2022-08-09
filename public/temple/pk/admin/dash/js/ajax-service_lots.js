"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

	var initTable1 = function() {
		var table = $('#ajax-users');

		// begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			order: [ 0, 'desc' ],
			ajax: {
				url: "/admin/service_lotsAjax",
				type: "POST"
			},
			columns: [
				{ data: "id", searchable: true },
				{ data: "information", searchable: true },

				{ data: "services_id", searchable: true },

				{ data: "created_at", searchable: true },
				{ data: null, searchable: false, orderable: false,
					render: function (data, type, row) {
						return `
						<a href="/admin/service_lots_editing/`+ row.id +`" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Редактировать"><i class="la la-edit"></i></a>
						<form action=""><a href="/admin/service_lots/del/`+ row.id +`" class="btn_del btn btn-sm btn-clean btn-icon btn-icon-md" title="Удалить"><i class="fas fa-times"></i></a></form>
						`;
					}
				}
			],
			"language": {
				  "processing": "Подождите...",
				  "search": "Поиск:",
				  "lengthMenu": "Показать _MENU_ записей",
				  "info": "Записи с _START_ по _END_ из _TOTAL_ записей",
				  "infoEmpty": "Записи с 0 до 0 из 0 записей",
				  "infoFiltered": "(отфильтровано из _MAX_ записей)",
				  "infoPostFix": "",
				  "loadingRecords": "Загрузка записей...",
				  "zeroRecords": "Записи отсутствуют.",
				  "emptyTable": "В таблице отсутствуют данные",
				  "paginate": {
					"first": "Первая",
					"previous": "Предыдущая",
					"next": "Следующая",
					"last": "Последняя"
				  },
				  "aria": {
					"sortAscending": ": активировать для сортировки столбца по возрастанию",
					"sortDescending": ": активировать для сортировки столбца по убыванию"
				  }
			}
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesDataSourceAjaxServer.init();
});

